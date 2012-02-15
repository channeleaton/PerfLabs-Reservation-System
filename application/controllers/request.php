<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );

/**
 * Request Controller
 *
 * Methods:
 * index - Lists all requests
 * create - Creates form to add new request
 * view - Displays a single request
 * edit - Creates form to edit request
 * checkout - Creates form to checkout equipment
 * checkin - Creates form to checkin equipment
 * cancel - Cancels a request
 *
 */

class Request extends CI_Controller {

  public function __construct() {
  
    parent::__construct();
  
  }

  /**
   * Method: index();
   * @access Administrator, Manager
   *
   * Lists all requests
   *
   */
  public function index() {
  
    $this->load->view( 'templates/header');
    $this->load->view( 'error/empty_method');
    $this->load->view( 'templates/footer');
    $this->output->enable_profiler(TRUE);
  
  
  }

  /**
   * Method:create();
   * @access All
   *
   * Creates form to add new request
   *
   */
  public function create() {
  
    $this->load->view( 'templates/header');
    $this->load->view( 'error/empty_method');
    $this->load->view( 'templates/footer');
    $this->output->enable_profiler(TRUE);
  
  
  }

  /** 
   * Method: view();
   * @access Administrator, Manager, Users (own request only)
   *
   * Displays a single request
   *
   */
  public function view() {
  
    $this->load->view( 'templates/header');
    $this->load->view( 'error/empty_method');
    $this->load->view( 'templates/footer');
    $this->output->enable_profiler(TRUE);
  
  
  }

  /**
   * Method: edit();
   * @access Administrator, Manager, Users (own request only)
   *
   * Creates form to edit request
   *
   */
  public function edit() {
  
    $this->load->view( 'templates/header');
    $this->load->view( 'error/empty_method');
    $this->load->view( 'templates/footer');
    $this->output->enable_profiler(TRUE);
  
  
  }

  /**
   * Method: checkout()
   * @access Administrator, Manager
   *
   * Creates form to checkout equipment
   *
   */
  public function checkout() {
  
    $this->load->view( 'templates/header');
    $this->load->view( 'error/empty_method');
    $this->load->view( 'templates/footer');
    $this->output->enable_profiler(TRUE);
  
  
  }

  /**
   * Method: checkin();
   * @access Administrator, Manager
   *
   * Creates form to checkin equipment
   *
   */
  public function checkin() {
  
    $this->load->view( 'templates/header');
    $this->load->view( 'error/empty_method');
    $this->load->view( 'templates/footer');
    $this->output->enable_profiler(TRUE);
  
  
  }

  /**
   * Method: cancel();
   * @access Administrator, Users (own request only)
   *
   * Cancels request
   *
   */
  public function cancel() {
  
    $this->load->view( 'templates/header');
    $this->load->view( 'error/empty_method');
    $this->load->view( 'templates/footer');
    $this->output->enable_profiler(TRUE);
  
  
  }

}