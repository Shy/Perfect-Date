<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Thedatenight extends CI_Controller {

  /**
   * Index Page for The Date Night main site.
   * For now this is just a page with options,
   * that will direct to a results page.
   */
  public function index() {
    $this->load->view('header_view');

    /* Load needed libraries */
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

    /* Load the option select view */
    $this->load->view('option_select_view');

    $this->load->view('footer_view');
  }

  public function so_option_select() {
    $this->load->view('header_view');

    /* Load needed libraries */
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

    /* Load the significant other select view */
    $this->load->view('so_option_select_view', $_POST);

    $this->load->view('footer_view');
  }

  /**
   * Results Page after options are selected.
   * This page will list the best date options, given the parameters.
   */
  public function results() {
    $this->load->view('header_view');

    /* Load needed libraries */
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

    /* Grab all entries for now */
    $restaurant_query = $this->db->query('SELECT * FROM restaurant');
    $event_query = $this->db->query('SELECT * FROM event');

    /* Try to grab all the entered data */
    if(!(array_key_exists('restaurant_price', $_POST) &&
	 array_key_exists('event_price', $_POST) &&
	 array_key_exists('dress_type', $_POST))) {
      /* The user did not enter required information. Redirect to the front page */
      $this->load->view('option_select_view');
      $this->load->view('footer_view');
      return;
    }
    $restaurant_price = $_POST['restaurant_price'];
    $event_price = $_POST['event_price'];
    $dress_type = $_POST['dress_type'];

    /* These entries can be empty, but we still need an empty array if they don't exist */
    if(array_key_exists('restaurant_categories', $_POST)) {
      $restaurant_categories = $_POST['restaurant_categories'];
    } else {
      $restaurant_categories = array();
    }
    if(array_key_exists('so_restaurant_categories', $_POST)) {
      $so_restaurant_categories = $_POST['so_restaurant_categories'];
    } else {
      $so_restaurant_categories = array();
    }
    if(array_key_exists('event_categories', $_POST)) {
      $event_categories = $_POST['event_categories'];
    } else {
      $event_categories = array();
    }
    if(array_key_exists('so_event_categories', $_POST)) {
      $so_event_categories = $_POST['so_event_categories'];
    } else {
      $so_event_categories = array();
    }

    /* Rank each restaurant */
    foreach($restaurant_query->result() as $index=>$restaurant) {
      $rank = 0;

      /* Check the user's preferences */
      if(in_array($restaurant->category, $restaurant_categories)) {
	$rank = $rank + 1;
      }

      /* Check the SO's preferences */
      if(in_array($restaurant->category, $so_restaurant_categories)) {
	$rank = $rank + 1;
      }

      /* Check the price of the restaurant */
      if($restaurant_price == $restaurant->pricerange) {
	$rank = $rank + 1;
      }

      /* Check the dress code for the restaurant */
      if($restaurant->type != 'FORMAL' || $dress_type != 'CASUAL') {
	$rank = $rank + 1;
      }

      $restaurant_ranks[$index] = $rank;
    }

    /* Rank each event */
    foreach($event_query->result() as $index=>$event) {
      $rank = 0;

      /* Check the user's preferences */
      if(in_array($event->category, $event_categories)) {
	$rank = $rank + 1;
      }

      /* Check the SO's preferences */
      if(in_array($event->category, $so_event_categories)) {
	$rank = $rank + 1;
      }

      /* Check the price of the restaurant */
      if($event_price == $event->pricerange) {
	$rank = $rank + 1;
      }

      /* Check the dress code for the restaurant */
      if($event->type != 'FORMAL' || $dress_type != 'CASUAL') {
	$rank = $rank + 1;
      }

      $event_ranks[$index] = $rank;
    }

    /* Custom Insertion sort */
    function rank_sort(&$array, &$ranks) {
      $array_size = count($array);
      $array_temp = null;
      $ranks_temp = null;
      for($i = 0; $i < $array_size; $i++) {

	$j = $i + 1;
	if($j == $array_size) {
	  break;
	}

	/* Compare ranks of the indecies */
	while($ranks[$j] > $ranks[$i]) {
	  /* Swap entries in array */
	  $array_temp = $array[$i];
	  $array[$i] = $array[$j];
	  $array[$j] = $array_temp;

	  /* Swap entries in ranks */
	  $ranks_temp = $ranks[$i];
	  $ranks[$i] = $ranks[$j];
	  $ranks[$j] = $ranks_temp;

	  if($i > 0) {
	    $i--;
	  }
	  $j--;
	}
      }
      return array($array, $ranks);
    }

    /* Sort restaurants and grab only the top couple */
    $threshold = 2;
    $restaurant_array = $restaurant_query->result_array();
    list($sorted_restaurants, $sorted_restaurant_ranks) = rank_sort($restaurant_array, $restaurant_ranks);
    $final_restaurants = array();
    for($i = 0; count($final_restaurants) != $threshold;) {
      $curr_rank = $sorted_restaurant_ranks[$i];
      $curr_rank_restaurants = array();
      /* Grab restaurants from current rank */
      for($j = 0; $sorted_restaurant_ranks[$i] == $curr_rank; $j++, $i++) {
	$curr_rank_restaurants[$j] = $sorted_restaurants[$i];
      }
      if(count($final_restaurants) + count($curr_rank_restaurants) > $threshold) {
	/* Add elements from curr_rank_restaurants to final_restaurants until the threshold is reached */
	$random_indexes = array_rand($curr_rank_restaurants, $threshold - count($final_restaurants));
	if(is_array($random_indexes)) {
	  /* Add all the randomly picked elements */
	  foreach($random_indexes as $index) {
	    array_push($final_restaurants, $curr_rank_restaurants[$index]);
	  }
	} else {
	  /* Only one element in random_indexes */
	  array_push($final_restaurants, $curr_rank_restaurants[$random_indexes]);
	}
      } else {
	/* This will not put us over the limit */
	foreach($curr_rank_restaurants as $restaurant) {
	  array_push($final_restaurants, $restaurant);
	}
      }
      }

    /* Sort events and grab only the top couple */
    $event_array = $event_query->result_array();
    list($sorted_events, $sorted_event_ranks) = rank_sort($event_array, $event_ranks);
    $final_events = array();
    for($i = 0; count($final_events) != $threshold;) {
      $curr_rank = $sorted_event_ranks[$i];
      $curr_rank_events = array();
      /* Grab events from current rank */
      for($j = 0; $sorted_event_ranks[$i] == $curr_rank; $j++, $i++) {
	$curr_rank_events[$j] = $sorted_events[$i];
      }
      if(count($final_events) + count($curr_rank_events) > $threshold) {
	/* Add elements from curr_rank_events to final_events until the threshold is reached */
	$random_indexes = array_rand($curr_rank_events, $threshold - count($final_events));
	if(is_array($random_indexes)) {
	  /* Add all the randomly picked elements */
	  foreach($random_indexes as $index) {
	    array_push($final_events, $curr_rank_events[$index]);
	  }
	} else {
	  /* Only one element in random_indexes */
	  array_push($final_events, $curr_rank_events[$random_indexes]);
	}
      } else {
	/* This will not put us over the limit */
	foreach($curr_rank_events as $event) {
	  array_push($final_events, $event);
	}
      }
    }

    /* Assign results to data to pass to the View */
    $data = array();
    $data['restaurants'] = $final_restaurants;
    $data['events'] = $final_events;

    /* Load the view to display the best options */
    $this->load->view('results_view', $data);

    $this->load->view('footer_view');
  }
}

/* End of file thedatenight.php */
/* Location ./application/controllers/thedatenight.php */