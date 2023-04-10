<?php

// Nama Class: Form
// Deskripsi: CLass untuk membuat form inputan text sederhana
class Form
{
  private $fields = array();
  private $action;
  private $submit;
  private $jumField = 0;

  public function __construct($action, $submit)
  {
    $this->action = $action;
    $this->submit = $submit;
  }

  public function displayForm()
  {
    echo "<form action='" . $this->action . "' method='POST'>";
    echo '<table>';
    for ($j = 0; $j < count($this->fields); $j++) {
      echo "<tr><td>" . $this->fields[$j]['label'] . "</td>";
      echo "<td><input type='text' name='" . $this->fields[$j]['name'] . "'></td></tr>";
    }
    echo "<tr><td colspan='2'>";
    echo "<center><input type='submit' name='" . $this->submit . "' class='submit-button'> </td></tr></center>";
    echo "</table>";
  }

  public function addField($name, $label)
  {
    $this->fields[$this->jumField]['name'] = $name;
    $this->fields[$this->jumField]['label'] = $label;
    $this->jumField++;
  }
}
