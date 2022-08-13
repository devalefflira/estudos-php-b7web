<?php

function seq1() {
  for ($q=1; $q<=10; $q++) {
    echo $q."<br/>";
  }
  echo "<hr/>";
}

function seq2() {
  for ($r=11; $r<=20; $r++) {
    echo $r."<br/>";
  }
  echo "<hr/>";
}

function seq3() {
  for ($s=21; $s<=30; $s++) {
    echo $s."<br/>";
  }
  echo "<hr/>";
}

seq1();
seq2();
seq3();