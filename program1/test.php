<?php
interface Test
{
function write();
function answer();
}
class Question implements Test 
{
function write()
{
return "What is the name of ";
}
function answer()
{
return "";
}
}
?>
