<?php

function flash($message, $level = 'info'){

//   Session::put('foo', 'bar');
  session(['foo'=>'bar']);

//   Session::flash('status', 'Hello There!');
  session()->flash('flash_message', $message);
  session()->flash('flash_message_level', $level);

}
