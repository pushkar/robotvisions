<?php
$page = "projects";
include "header.php";
include "menu.php";
include "data.php";
?>

<div class="container-fluid">

<h4>Reinforcement Learning Agent to play Mario</h4>
<p>Reinforcement learning is a learning-control technique concerned with how an agent should take actions in an environment so as to maximize some notion of long-term reward. Reinforcement learning algorithms attempt to find policies that choose optimal actions. In this project, we will get a more comprehensive understanding on reinforcement learning by implementing it in Processing.</p>

<p>There are two components to this project. The first component will require us to develop a Markov Decision Process simulator and implement and analyize several different methods for Reinforcement Learning.</p>

<p>The second component of the project will see us transfer this code and apply it to a problem in the real world!</p>

<p>For our MDP simulator we will need to setup a grid world with the following components</p>

<ol>
<li>Reward function based upon agent state.</li>
<li>Transition function based upon an agent action.</li>
<li>Goal, start, and impassible states.</li>
<li>The ability to interactively add or subtract rewards.</li>
<li>An agent object with all the necessary getter and setter functions.</li>
<li>A visualization of our grid world.</li>
</ol>

<p>Once we have our MDP simulator, we will need to implement the following methods for solving MDPs using Reinforcement Learning</p>

<ul>
<li>Value Iteration</li>
<li>Policy Iteration</li>
<li>Q-Learning (and the SARSA variant).</li>
</ul>

<p>Once we have gotten this far, we should have a strong understanding of the principles for RL. We will research problems that we think would be ideal candidates for a RL based solution. Develop a proposal and discuss how we will transfer our code to these problems. We will discuss the change in environemnts for our simulation and any other issues we may encounter such as partial observability, lack of knowledge about the reward function or transition models.</p>

<p><b>Deliverable 1</b></p>

<ul>
<li>A description of our MDP simulator and design choices we made during implementation. We will include screenshots of our visualization (video is better!).</li>
<li>Discuss the qualities and performance of each RL algorithm we implemented. What differentiates Q-Learning from the others? What are the convergence behaviors for each algorithm? Be sure to connect the behavior to known concepts such as the exploration vs. exploitation.</li>
<li>What happens if our agent had only a partial view of the environment? Which algorithms would work and which wouldn't?</li>
</ul>

<p><b>Deliverable 2</b></p>
<ul>
<li>Our code</li>
<li>Our proposal</li>
<li>Our analysis and conclusion</li>
</ul>

</div>

<?
include "footer.php";
?>
