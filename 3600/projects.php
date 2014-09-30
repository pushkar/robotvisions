<?php
$page = "projects";
include "header.php";
include "menu.php";
include "data.php";
?>

<div class="container-fluid">

<h4>Projects</h4>
<ul>
    <li>Project 0: Introduction to Python. <a href="http://www.codecademy.com/tracks/python">Complete the CodeAcademy Python Track.</a> (No Due Date)</li>
    <li>Project 1: <a href="project1.php">Search</a>. </li>
    <li>Project 2: <a href="project2.php">Ghostbusters</a>. </li>
    <li>Project 3: <a href="project3/">Reinforcement Learning</a>. </li>
</ul>

<h4>Practice Problems</h4>
<ul>
    <li><a href="problems/missionaries.pdf">Missionaries and cannibals</a> (<a href="problems/missionaries-soln.pdf">solution</a>)</li>
    <li><a href="problems/search.pdf">Search</a> (<a href="problems/search-soln.pdf">solution</a>)</li>
    <li><a href="problems/search2.pdf">Search 2</a> (<a href="problems/search2-soln.pdf">solution</a>)</li>
    <li><a href="problems/csp.pdf">Constraint satisfaction</a> (<a href="problems/csp-soln.pdf">solution</a>)</li>
    <li><a href="problems/chutes.pdf">Expectiminimax</a> (<a href="problems/chutes-soln.pdf">solution</a>)</li>
    <li><a href="problems/wumpus.pdf">Resolution with propositional logic: wumpus world</a> (<a href="problems/wumpus-soln.pdf">solution</a>)</li>
    <li><a href="problems/bayes-net.pdf">Bayes net inference</a> (<a href="problems/bayes-net-soln.pdf">solution</a>)</li>
    <li><a href="problems/bayes-net2.pdf">Bayes net inference 2</a> (<a href="problems/bayes-net2-soln.pdf">solution</a>)</li>
    <li><a href="problems/mdp.pdf">Markov decision process</a> (<a href="problems/mdp-soln.pdf">solution</a>)</li>
    <li><a href="problems/value-iteration.pdf">MDP Value iteration problem</a> (<a href="problems/value-iteration-soln.pdf">solution</a>)</li>
    <li><a href="problems/decision-tree.pdf">Decision tree learning</a> (<a href="problems/decision-tree-soln.pdf">solution</a>)</li>
</ul>

<br />
<h4>Software</h4>
<?php list_other($software_list); ?>

<?
include "footer.php";
?>
