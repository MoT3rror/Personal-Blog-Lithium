<?php
namespace app\controllers;

//Tell the controller about any models we may need
use app\models\MyWorks;

//Ensure our controller inherits the \lithium\action\Controller class
class MyWorkController extends \lithium\action\Controller
{
  //Define a default 'index' for when a user accesses the /posts/ URL
  public function index()
  {
    $myWorks = MyWorks::all();
    //Send the $my_posts object to our view
    return compact('myWorks');
  }

  public function view() {
    //Dont run the query if no post id is provided
    if($this->request->args[0]){
      //Get single record from the database where post id matches the URL
      $myWorks = MyWorks::first($this->request->args[0]);
      //Send the retrieved post data to the view
      if($myWorks)
      {
        return compact('myWorks');
      }
    }
    //since no post id was specified, redirect to the index page
    $this->redirect(array('MyWork::index'));
  }
}
?>