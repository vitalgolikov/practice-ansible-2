<?php
session_start();

$conn = mysqli_connect(
  '192.168.98.211',
  'lms_user',
  'rwegth53hbbn',
  'lms_db'
) or die(mysqli_erro($mysqli));

