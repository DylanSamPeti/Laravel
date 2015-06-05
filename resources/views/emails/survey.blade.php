You received a message from AUT Students


<p>
From {{ $name }}
</p>


<!-- QUESTION ONE -->
<h2>Do you have a registered drivers lisence?</h2>

<?php if(isset($question_one[0])){ ?>
<p>
{{ $question_one[0] }}
</p>
<?php } ?>

<?php if(isset($question_one[1])){ ?>
<p>
{{ $question_one[1] }}
</p>

<?php } ?>



<!-- QUESTION TWO -->
<h2>Do you text and drive?</h2>

<?php if(isset($question_two[0])){ ?>
<p>
{{ $question_two[0] }}
</p>
<?php } ?>

<?php if(isset($question_two[1])){ ?>
<p>
{{ $question_two[1] }}
</p>

<?php } ?>



<!-- QUESTION THREE -->
<h2>How far do you travel each day?</h2>

<?php if(isset($question_three[0])){ ?>
<p>
{{ $question_three[0] }}
</p>
<?php } ?>

<?php if(isset($question_three[1])){ ?>
<p>
{{ $question_three[1] }}
</p>

<?php } ?>

<?php if(isset($question_three[2])){ ?>
<p>
{{ $question_three[2] }}
</p>

<?php } ?>



<!-- QUESTION FOUR -->
<h2>What kind of phone do you use?</h2>

<?php if(isset($question_four[0])){ ?>
<p>
{{ $question_four[0] }}
</p>
<?php } ?>

<?php if(isset($question_four[1])){ ?>
<p>
{{ $question_four[1] }}
</p>

<?php } ?>




<!-- QUESTION FOUR B-->
<h2>What distracts you when driving?</h2>

<?php if(isset($question_four_b)){ ?>
<p>
{{ $question_four_b }}
</p>

<?php } ?>


<!-- QUESTION FOUR C-->
<h2>On a scale of 1-10, how do you measure your stress whilst driving?</h2>

<?php if(isset($question_four_c)){ ?>
<p>
{{ $question_four_c }}
</p>

<?php } ?>



<!-- QUESTION FIVE-->
<h2>What model car do you have? </h2>

<?php if(isset($question_five)){ ?>
<p>
{{ $question_five }}
</p>

<?php } ?>




<!-- QUESTION SIX -->
<h2>Roughly, how long do you have your phone on you each day? (Between 7am and 7pm)</h2>

<?php if(isset($question_six[0])){ ?>
<p>
{{ $question_six[0] }}
</p>
<?php } ?>

<?php if(isset($question_six[1])){ ?>
<p>
{{ $question_six[1] }}
</p>

<?php } ?>

<?php if(isset($question_three[2])){ ?>
<p>
{{ $question_six[2] }}
</p>

<?php } ?>



<!-- QUESTION SEVEN -->
<h2>Do you find text/driving a dangerous behaivour?</h2>

<?php if(isset($question_seven[0])){ ?>
<p>
{{ $question_seven[0] }}
</p>
<?php } ?>

<?php if(isset($question_seven[1])){ ?>
<p>
{{ $question_seven[1] }}
</p>

<?php } ?>


<!-- QUESTION EIGHT -->
<h2>Do you remember what you thought about during your last commute?</h2>

<?php if(isset($question_eight[0])){ ?>
<p>
{{ $question_eight[0] }}
</p>
<?php } ?>

<?php if(isset($question_eight[1])){ ?>
<p>
{{ $question_eight[1] }}
</p>

<?php } ?>


<!-- QUESTION FIVE-->
<h2>What do you have to say?</h2>

<?php if(isset($question_nine)){ ?>
<p>
{{ $question_nine }}
</p>

<?php } ?>




