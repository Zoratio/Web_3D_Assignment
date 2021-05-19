<?php
class Model {
	// Handeler that points to the database connection
	public $dbhandle;
	
	// Create database connection
	public function __construct()
	{
		// Set the database source name
		$dsn = 'sqlite:./db/test1.db';		
		// Create a connection to a database
		try {				
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_EMULATE_PREPARES => false,
				));
		}
		catch (PDOEXception $e) {
			echo "Sorry, I can not connect to the database!";
			// Error message if the connection fails...
        	print new Exception($e->getMessage());
    	}
	}
	




	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, brand TEXT, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)");
			return "Model_3D table is successfully created inside test1.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	
	





	public function dbGetBrand()
	{
		// Return an array of the Drink Names
		return array("-", "Coke","Coke Light","Coke Zero","Sprite","Dr Pepper","Fanta");
	}






	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (1, 'Coke', 'X3D Coke Model', 'string_2', 'string_3','string_4','string_5'); " .
			"INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (2, 'Sprite', 'X3D Sprite Model', 'string_2', 'string_3','string_4','string_5'); " .
			"INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (3, 'Fanta', 'X3D Fanta Model', 'string_2', 'string_3','string_4','string_5'); " .
			"INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (4, 'Coke Light', 'X3D Coke Light Model', 'string_2', 'string_3','string_4','string_5'); " .
			"INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (5, 'Coke Zero', 'X3D Coke Zero Model', 'string_2', 'string_3','string_4','string_5'); " .
			"INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (6, 'Dr Pepper', 'X3D Dr Pepper Model', 'string_2', 'string_3','string_4','string_5'); ");
			return "X3D model data inserted successfully inside test1.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}






	public function dbGetData(){
		try{
			$sql = 'SELECT * FROM Model_3D';
			$stmt = $this->dbhandle->query($sql);
			$result = null;
			$i=-0;
			// Use a while loop to loop through the rows...	
			while ($data = $stmt->fetch()) {
				// Write the contents of the database to the results array to send back to the view
				$result[$i]['brand'] = $data['brand'];
				$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
				$result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
				$result[$i]['modelTitle'] = $data['modelTitle'];
				$result[$i]['modelSubtitle'] = $data['modelSubtitle'];
				$result[$i]['modelDescription'] = $data['modelDescription'];
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close connection to the database
		$this->dbhandle = NULL;
		return $result;
	}




	
	//Function to simulate the model data
	public function model3D_info()
	{
		return array(
			'model_1' => 'Coke Light',
			'image3D_1' => 'Coke Light',

			'model_2' => 'Coke Zero',
			'image3D_2' => 'Coke Zero',

			'model_3' => 'Coke',
			'image3D_3' => 'Coke',

			'model_4' => 'Dr Pepper',
			'image3D_4' => 'Dr Pepper',

			'model_5' => 'Fanta',
			'image3D_5' => 'Fanta',

			'model_6' => 'Sprite',
			'image3D_6' => 'Sprite'
		);
	}
}
?>