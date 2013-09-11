<?php
namespace app\controllers;

//Tell the controller about any models we may need
use app\models\MyPosts;

//Ensure our controller inherits the \lithium\action\Controller class
class MyPostsController extends \lithium\action\Controller
{
  //Define a default 'index' for when a user accesses the /posts/ URL
  public function index()
  {
    $myPosts = MyPosts::find('all', array(
        'limit'   =>  5,
        'order'   =>  array(
            'created_at' => 'DESC',
        )
    ));
    //Send the $my_posts object to our view
    return compact('myPosts');
  }

  public function add()
  {
    $saved = false;
    //If we have any posted or querystring data...
    if($this->request->data){
        //Use the MyPost model to create a new dataset
        $my_post = MyPosts::create($this->request->data);
        //Attempt to save the data, and update the $saved variable
        //with the outcome of the save attempt (bool)
        $saved = $my_post->save();
    }
    //Return $saved to our view as part of an associative array/token
    return compact('saved');
  }


  public function view() {
    //Dont run the query if no post id is provided
    if($this->request->args[0]){
      //Get single record from the database where post id matches the URL
      $myPost = MyPosts::first($this->request->args[0]);
      //Send the retrieved post data to the view
      if($myPost)
      {
        return compact('myPost');
      }
    }
    //since no post id was specified, redirect to the index page
    $this->redirect(array('MyPosts::index'));
  }
}
?>