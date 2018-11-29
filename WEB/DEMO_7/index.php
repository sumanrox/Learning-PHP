<?php
//File Handling
$path = '/dir/my.php';
$file= 'file.txt';
// Retrun Filename
echo basename($path).'<br>';

// Return Filenname without extension
echo basename($path, '.php').'<br>';

//Return the dir name from path
echo dirname($path).'<br>';

// Check for existence
// Returns 1 for true and 0 for false
// Also checks for directory
echo file_exists($file).'<br>';

// Get Absolute path

echo realpath($file).'<br>';

// Checks to see if file
echo is_file($file).'<br>';

// Check if writable
echo is_writable($file).'<br>';
// Check if readable
echo is_writable($file).'<br>';

//Get file size
// Returns in bytes
echo filesize($file).'<br>';

// Create a directory
mkdir('testing').'<br>';
// Remove Directory
rmdir('testing').'<br>';

// Copying a file
echo copy('File.txt','Copied.txt').'<br>';

// Rename a File
rename('Copied.txt', 'Myfile.txt');

// Delete a File
unlink('Myfile.txt');

// Write from file to string
echo file_get_contents($file).'<br>';

// Write string to a File
echo file_put_contents($file, 'Goodbye World');

//Appending
$current = file_get_contents($file);
$current .=' Welcome World';
file_put_contents($file,$current);

// Open File for reading

$handle=fopen($file,'r');
$data=fread($handle, filesize($file));
echo $data.'<br>';

// Open File for Writing
$handle=fopen('File2.txt','w');
$txt="John Doe \n";
fwrite($handle,$txt);
$txt="Suman Roy";
fwrite($handle,$txt);
fclose($handle);


?>