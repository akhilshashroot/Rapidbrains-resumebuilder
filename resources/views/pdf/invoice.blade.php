<?php
use PDF; // at the top of the file

  PDF::SetTitle('Hello World');
  PDF::AddPage();
  PDF::Write(0, 'Hello World');
  PDF::Output('hello_world.pdf');