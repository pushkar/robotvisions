<?php
$page = "assignment1";
include "header.php";
include "menu.php";
include "data.php";
?>

<div class="container-fluid">

<h4>Supervised Learning</h4>
<p>Due Jun 7, 2013</p>
<p>The purpose of this project is to explore some techniques in supervised learning. It is important to realize that understanding an algorithm or technique requires understanding how it behaves under a variety of circumstances. As such, you will be asked to implement some simple learning algorithms (for sufficiently small values of implement), and to compare their performance.</p>
<p>You have to explore these algorithms on two datasets. You have to find one dataset that is interesting (that is, interesting from the machine learning point of view) and then analyze it. This dataset should be a regression problem or a multivariate classification problem. For the second dataset you are given a binary classification problem (<a href="downloads/diabetes_train.txt">training set</a>, <a href="downloads/diabetes_test.txt">testing set</a> or use the ARFF versions <a href="downloads/diabetes_train.arff">training set</a>, <a href="downloads/diabetes_test.arff">testing set</a> - These datasets are different. So mention in your assignment if you are using the ARFF version of the dataset.).</p>
<p>You should implement five learning algorithms. They are for: </p>

<ul>
<li>Decision trees with some form of pruning</li>
<li>Neural networks</li>
<li>Boosting</li>
<li>Support Vector Machines</li>
<li>k-nearest neighbors</li>
</li>
</ul>

<p>Each algorithm is described in detail in your textbook and all over the web. In fact, instead of implementing the algorithms yourself, you may use software packages that you find elsewhere; however, if you do so you should provide proper attribution. Also, you will note that you have to do some fiddling to get good results, graphs and such, so even if you use another's package, you may need to be able to modify it in various ways.</p>

<p><b>Decision Trees.</b> For the decision tree, you should implement or steal a decision tree algorithm. Be sure to use some form of pruning. You are not required to use information gain (for example, there is something called the GINI index that is sometimes used) to split attributes, but you should describe whatever it is that you do use.</p>

<p><b>Neural Networks.</b> For the neural network you should implement or steal your favorite kind of network and training algorithm. You may use networks of nodes with as many layers as you like and any activation function you see fit.</p>

<p><b>Boosting.</b> Implement a boosted version of your decision trees. As before, you will want to use some form of pruning, but presumably because you're using boosting you can afford to be much more aggressive about your pruning.</p>

<p><b>Support Vector Machines.</b> You should implement (for sufficently loose definitions of implement including "download") SVMs. This should be done in such a way that you can swap out kernel functions. I'd like to see at least two.</p>

<p><b>k-Nearest Neighbors.</b> You should implement kNN. Use different values of k.</p>
<hr />

<h4>Reading</h4>
<p>You can read through your class notes and texbooks. Apart from that read Alpaydin Ch 19.</p>
<hr />

<h4>What to Turn In</h4>

<p>You must submit via tsquare a tar or zip file named yourgtaccount.{zip,tar,tar.gz} that contains a single folder or directory named yourgtaccount. That directory in turn contains:</p>
 
<ol>
<li>A file named README.txt containing instructions for running your code</li>
<li>Your code</li>
<li>A file named yourgtname-analysis.pdf containing your writeup</li>
</ol>

<p>The file yourgtname-analysis.pdf should contain:</p>

<ul>
<li>for the type of problems you selected, a description of how do you design and analyze experiments to compare supervised learning algorithms?</li>

<li>the training and testing error rates you obtained running the various learning algorithms on your problems. At the very least you should include graphs that show performance on both training and test data as a function of training size (note that this implies that you need to design a classification problem that has more than a trivial amount of data) and--for the algorithms that are iterative--training times.</li>
 
<li>analyses of your results. Why did you get the results you did? Compare and contrast the different algorithms. What sort of changes might you make to each of those algorithms to improve performance? How fast were they in terms of wall clock time? Iterations? Would cross validation help (and if it would, why didn't you implement it?)? How much performance was due to the problems you chose? How about the values you choose for learning rates, stopping criteria, pruning methods, and so forth (and why doesn't your analysis show results for the different values you chose?)? Which algorithm performed best? How do you define best?</li>

<li>Be creative and think of as many questions you can, and as many answers as you can. </li>
</ul>
<p>You analysis writeup is limited to 12 pages.</p>
<hr />

<h4>Grading Criteria</h4>

<p>You are being graded on your analysis more than anything else. Roughly speaking, implementing everything and getting it to run is worth maybe 10% of the grade on this assignment (in fact, steal the code; I not only don't care, I am encouraging you to use one of the many packages available both from the resources page and on the web). Of course, analysis without proof of working code makes the analysis suspect.</p>

<p>The key thing is that your explanations should be both thorough and concise. Imagine you are writing a paper for the major conference in your field the year you will be graduating and you need to impress all those folks who will be deciding whether to interview you later. You don't want them to think you're shallow do you? Or that you're incapable of coming up with interesting classification problems, right? And you surely don't want them to think that you make up for a lack of content by blathering on about irrelevant aspects of your work? Of course not.</p>


</div>

<?
include "footer.php";
?>
