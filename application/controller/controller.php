<?php
// Controller class for my MVC design pattern...
class Controller {

	// Public variables...
	public $load;
	public $model;




	
	// Constructor function
	function __construct($pageURI = null)
	{
		$this->load = new Load();
		$this->model = new Model();
		$this->$pageURI();
	}

	// Load the home page method (loaded by default without user doing anything from the mvc)
    function home()
	{
		$this->load->view('viewCocaCola');
	}



	

	// Drinks can images page method - add this to the end of URL: 
	// ....index.php/apidrinksimages
	function apiDrinksImages()	
	{
		$data = $this->model->model3D_info();						
		$this->load->view('view3DAppTest_2', $data);	//ive removed the images I used in the lab from the folder so this won't be able to display the images it used...
	}

	
	// The following three methods are examples of what I could do to play aorund with storing and accessing data 
	function apiCreateTable()	
	{
		$data = $this->model->dbCreateTable();						
		$this->load->view('viewMessage', $data);
	}
	function apiInsertData()	
	{
		$data = $this->model->dbInsertData();						
	   	$this->load->view('viewMessage', $data);
	}  
	function apiGetData()	
	{
		$data = $this->model->dbGetData();						
		$this->load->view('view3DAppData', $data);
	}  	

	
	// Used just to demonstrate that I can get data from third party sources
	function apiGetFlickrFeed()
	{
		$this->load->view('viewFlickrFeed');						
	}
	
	// Read JSON data from a JSON file
	function apiGetJson()	
	{
		$this->load->view('viewJson');	//ive removed createJson from lab so this won't show anything now...
	}
	
	// Call to select 3D images
	function apiLoadImage()	
	{
	   $data = $this->model->dbGetBrand();
	   $this->load->view('viewDrinks', $data);	//ive removed the images I used in the lab from the folder so this won't be able to display the images it used...
	}

	// Load the "viewCocaCola" and get data from the "model" (does the same thing as the new home() function).
	function apiCocaCola()	
	{
		$this->load->view('viewCocaCola');	
	}

	// Get data from the model and echo it out to the view
	function apiGetCokeData()
	{
		$data = $this->model->dbGetData();
		echo json_encode($data);	//get data then echo it out to the website. No handler waiting for this echo. There are other handlers on this website as examples
	}  	  	
	
}
?>    