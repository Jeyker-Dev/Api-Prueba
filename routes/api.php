<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Routes Students
Route::get("/students",function (){
    return "Students APi";
});

Route::post("/students/create", function ()
{
    return "Creating a Students";
});

Route::put("/students/{id}", function ()
{
    return "Updating A Whole Student";
});

Route::patch("/students/{id}", function () 
{
    return "Updating a Part Of a Student";
});

Route::delete("/students/{id}", function ()
{
    return "Deleting a Student";
});