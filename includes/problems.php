<?php
//$problemlist = [];
$problemlist = array();
$subproblemlist = array();
$uparrow = "&uarr;";
$downarrow = "&darr;";
$rightarrow = "&rarr;";

//This is also defined in functions.js.  If you change it here you have to change it there.
abstract class ProblemType {
	const multiplechoice = 0;
	const calculation = 1;
	const lesson = 2;
}

function CreateMultipleChoice ($name, $problemtype, $imgsrc, $problemtext, $problemanswer, $problemchoices, $attemptonefeedbackimgsrc, $attemptonefeedback, $problemexplanationimgsrc, $problemexplanation) {
	$problem = array();
	$problem['name'] = $name;
	$problem['problemtype'] = $problemtype;
	$problem['imgsrc'] = $imgsrc;
	$problem['problemtext'] = $problemtext;
	$problem['problemanswer'] = $problemanswer;
	$problem['problemchoices'] = $problemchoices;
	$problem['attemptonefeedback'] = $attemptonefeedback;
	$problem['attemptonefeedbackimgsrc'] = $attemptonefeedbackimgsrc;
	$problem['problemexplanation'] = $problemexplanation;
	$problem['problemexplanationimgsrc'] = $problemexplanationimgsrc;
	return $problem;
}

function CreateCalculation ($name, $problemtype, $imgsrc, $problemtext, $problemanswer, $problemtolerance, $attemptonefeedbackimgsrc, $attemptonefeedback, $problemexplanationimgsrc, $problemexplanation) {
	$problem = array();
	$problem['name'] = $name;
	$problem['problemtype'] = $problemtype;
	$problem['imgsrc'] = $imgsrc;
	$problem['problemtext'] = $problemtext;
	$problem['problemanswer'] = $problemanswer;
	$problem['problemtolerance'] = $problemtolerance;
	$problem['attemptonefeedback'] = $attemptonefeedback;
	$problem['attemptonefeedbackimgsrc'] = $attemptonefeedbackimgsrc;
	$problem['problemexplanation'] = $problemexplanation;
	$problem['problemexplanationimgsrc'] = $problemexplanationimgsrc;
	return $problem;
}

function CreateLesson ($name, $problemtype, $imgsrc, $lessontext) {
	$problem = array();
	$problem['name'] = $name;
	$problem['problemtype'] = $problemtype;
	$problem['imgsrc'] = $imgsrc;
	$problem['lessontext'] = $lessontext;
	return $problem;
}
//Begin section 1
$ProblemName = "1.  Resistance";
$ProblemType = ProblemType::calculation;
$ImgSrc = "./images/CirculatoryModel.png";
$ProblemText = '<p>The basic equation of hemodynamics is <b><i>Ohm’s Law</i></b>: P<sub>1</sub> - P<sub>2</sub> = Q x R</p> <p>What is the resistance, R, to flow through organ #3 in mmHg/(L/min) with the model horizontal?</p>
<p><b>Enter you answer on the upper right and Evaluate.</b></p>';
$ProblemAnswer = '50';
$ProblemTolerance = '5';
$AttmeptOne = "<b>Nope.</b>  P<sub>2</sub> = Q x R.  Note that with the model horizontal (i.e. lying down) that the arterial and venous pressure is basically the same for all circulatory beds.</p>";
$AttmeptOneImgSrc = "./images/CirculatoryModel.png";
$ExplanationImgSrc = "./images/CirculatoryModel.png";
$Explanation = "<p>P<sub>1</sub> - P<sub>2</sub> = Q<sub>3</sub> x R<sub>3</sub></br>R3 = (P<sub>1</sub> - P<sub>2</sub>)/Q<sub>3</sub></p>
<p>(P<sub>1</sub> - P<sub>2</sub>) = MAP - CVP = 100 - 0 = 100 mm Hg</br>
Q<sub>3</sub> = 2.0 L/min</br>
R<sub>3</sub> = 100/2.0 = 50 mmHg/(L/min) </p>";

$NewProblem = CreateCalculation($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemTolerance, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = "1.  Resistance";
$ProblemType = ProblemType::calculation;
$ImgSrc = "./images/CirculatoryModel.png";
$ProblemText = '<p>Now its your turn:  What is the total peripheral resistance (TPR) with the model horizontal?</p><p><b>Please enter your answer and Evaluate.</b></p>';
$ProblemAnswer = '20';
$ProblemTolerance = '2';
$AttmeptOne = "<p><b>Sorry.  No.</b>  In order to calculate the TPR (i.e. the resistance to flow through the entire body), 
you need to know the values for Ohm's Law for the entire system and use them in the equation.</p>
<p>You already know the pressures (100 mmHg and 0 mmHg).  The flow through the body is the cardiac output (CO).</p>";
$AttmeptOneImgSrc = "./images/CirculatoryModel.png";
$ExplanationImgSrc = "./images/CirculatoryModel.png";
$Explanation = "<p>P<sub>1</sub> - P<sub>2</sub> = Q x R</br>MAP-CVP = CO x TPR</br>TPR = (MAP-CVP)/CO</p>
<p>(MAP-CVP) = 100 - 0 = 100mm Hg</br>CO = total flow out of heart = Σ(Q1+Q2+Q3+Q4+Q5) = 
0.5+1.0+2.0+1.0+0.5 = 5 L/min<p><p>TPR = 100/5 = 20 mmHg/L/min</br> Note that the total 
resistance is less than the resistance of any single flow channel in the system (this can be seen 
by examining the equation describing the total resistance of a set of parallel resistances).</p>
<p>You can also calculate TPR if you know the resistance of each of the parallel flow paths:</br>
1/R<sub>total</sub> = 1/<sub>TPR</sub> = 1/R<sub>1</sub> + 1/R<sub>2</sub> + 1/R<sub>3</sub>
1/R<sub>4</sub> + 1/R<sub>5</sub>.</br>This is, however, a more laborious solution in this case.</p>";

$NewProblem = CreateCalculation($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemTolerance, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

array_push($problemlist,$subproblemlist);
$subproblemlist = array();
//End section 1


//Begin section 2
$ProblemName = "2.  Pressures When Upright";
$ProblemType = ProblemType::calculation;
$ImgSrc = "./images/CirculatoryModel.png";
$ProblemText = '<p>The pressure anywhere in the circulation, P, is equal to P<sub>heart</sub> + P<sub>hydrostatic</sub> where 
P<sub>hydrostatic</sub> = ρ x g x h (ρ is the density of the fluid, g the gravitational constant, and 
h the height of the column of fluid; ρxgxh for 1 cm blood = 0.75 mmHg).</p>
<p>When the individual is lying down the pressure at point "a" is 100 mmHg, the pressure at point "v" is 0 mmHg, and the ΔP across organ #5, (P<sub>a</sub> - P<sub>v</sub>), is 100 mmHg.</p>
<p>(Yes, I know.  The CVP isn\'t "0".  But it\'s close enough to use 0  for the purposes of these calculations)</p>
<p>With the individual standing, what is the pressure at point "a"?  Assume the pressure at the level of the heart does not change.</p>
<p><b>Enter your answer in the in the upper right hand corner of the page and Evaluate.</b></p>';
$ProblemAnswer = '145';
$ProblemTolerance = '5';
$AttmeptOne = "<p><b>That's incorrect.</b>.</p> <p>In my demonstration problem, the height of the column of blood pushing down on point \"a\" was 0 cm 
because the individual was lying down. Here it's 60 cm.  So you'll have to add the pressure generated by this column onto the arterial pressure at 
the level of the heart.</p>";
$AttmeptOneImgSrc = "./images/CirculatoryModel.png";
$ExplanationImgSrc = "./images/CirculatoryModel.png";
$Explanation = "<p>Point \"a\" is 60 cm below the heart and hence there is a vertical column of blood creating a pressure at this point.</p>
<p>P<sub>hydrostatic</sub> = 60 cm  of blood x 0.75 mmHg/cm blood = 45 mmHg</br>
P<sub>heart</sub> = 100 mmHg</br>
P at point \"a\" = P<sub>heart</sub> + P<sub>hydrostatic</sub> = 100 + 45 = 145 mmHg.</p>";

$NewProblem = CreateCalculation($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemTolerance, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = '2.  Pressures When Upright';
$ProblemType = ProblemType::calculation;
$ImgSrc = "./images/CirculatoryModel.png";
$ProblemText = '<p>With the individual standing, what is the pressure at point "v"?
<p><b>Enter your answer at the upper right hand corner of the page and Evaluate.</b></p>';
$ProblemAnswer = '45';
$ProblemTolerance = '5';
$AttmeptOne = "<p><b>Hmmm...  I don't think we're getting the hang of this, yet</b></p>
<p>With the individual lying down the height of the column of blood pushing down on point \"v\" was 0 cm because the individual was lying down.  Here it's 60 cm.  
So you'll have to add the pressure generated by this column onto the arterial pressure at the level of the heart.</p>";
$AttmeptOneImgSrc = "./images/CirculatoryModel.png";
$ExplanationImgSrc = "./images/CirculatoryModel.png";
$Explanation = "<p>Point \"v\" is 60 cm below the heart and hence there is a vertical column of blood creating a pressure at this point.</p>
<p>P<sub>hydrostatic</sub> = 60 cm  of blood x 0.75 mmHg/cm blood = 45 mmHg</br>
P<sub>heart</sub> = 100 mmHg</br>
P at point \"v\" = P<sub>heart</sub> + P<sub>hydrostatic</sub> = 0 + 45 = 45 mmHg.</p>";
$NewProblem = CreateCalculation($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemTolerance, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = '2.  Pressures When Upright';
$ProblemType = ProblemType::calculation;
$ImgSrc = "./images/CirculatoryModel.png";
$ProblemText = '<p>So P<sub>1</sub> is 145 mmHg and P<sub>2</sub> is 45 mmHg.  What is the ΔP across organ 5?</p>
<p><b>Click on the correct answer in the bar at the upper right hand corner of the page and Evaluate.</b></p>';
$ProblemAnswer = '100';
$ProblemTolerance = '0';
$AttmeptOne = "<p>The ΔP is P<sub>1</sub> - P<sub>2</sub>.</p>";
$AttmeptOneImgSrc = "./images/CirculatoryModel.png";
$ExplanationImgSrc = "./images/ColumnsPushingDown.png";
$Explanation = "<p>(P<sub>a</sub> - P<sub>v</sub>) = 145 - 45 = 100 mmHg.</p>
<p>Thus, in going from recumbent to erect there is 
an increase in absolute pressure below the heart (e.g., 
in most of the body), although there is no change in 
the pressure gradient producing flow.  However, the increase in 
absolute pressure means that the pressure in the capillaries will 
be greater, favoring filtration of fluid OUT of the capillaries and 
hence favoring edema formation.</p>
<p>NOTE: How to think about vertical columns above and below the heart.  
The model system we are considering has a heart and circulation that function together to produce a pressure at 
the aorta (MAP) equal to 100 mm Hg.  While the model is recumbent, the pressure at the arterial end of each organ 
is 100 mm Hg (remember, the pressure drop along the arteries is quite small).</p>
<p>When the model is erect there is 
clearly a vertical column of blood in both the arterial compartment and the venous compartment; the column above 
the heart is at most 40 cm high and the column below the heart is at most 60 cm high.  However, with the model 
vertical, the pressure at the aorta is still 100 mm Hg.  That pressure is regulated by your reflexes.</p>
<p>As we proceed down from the aorta to point 
\"a\" the pressure increases because there is an additional vertical column of fluid of increasing height above 
each point we consider.   At point \"a\" the hydrostatic pressure from this vertical column is 45 mm Hg 
(corresponding to the pressure created by the 60 cm column of blood from the aorta to that point).  The 40 cm 
column that is present above the heart does not add to this because the 100 mm Hg pressure at the aorta includes 
the effect of that column (and the pressure generated by the heart).</p>
<p>If we look above the heart, the pressure there declines by 0.75 mmHg for each cm of height.  
Hence the arterial pressure above the heart is less than 100 mmHg.</p>
<p>Note also that though the pressures change when a person goes from lying down to erect 
that ΔP does <b>not</b> change and that there is, therefore, <i>no change in blood flow</i>.</p>";

$NewProblem = CreateCalculation($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemTolerance, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = '2.  Pressures When Upright';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/Congestive Heart Failure Swelling in Legs.png";
$LessonText = "<p>So what's the point of this exercise?  Glad you asked.</p>
<p>Shown above on the top right are typical complaints and physical exam findings from a <i>congestive heart failure</i> patient.  
Particularly note that the patient complains of swelling in her legs.  Why would this be?</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = '2.  Pressures When Upright';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/ideal capillary.png";
$LessonText = "<p>Note the behaviour of an \"ideal\" capillary (lower right).  The hydrostatic pressure inside the capillary pushes water out 
of the capillary from high pressure in the lumen to low pressure in the tissues (<b>filtration</b>).  This is opposed 
by the tendency of the high osmolarity in the capillary (known as \"oncotic pressure\") to draw water in (<b>reabsorbtion</b>).  
Ordinarily filtration is only slightly greater than reabsorbtion, leading to the formation of lymph in the tissues.<p>

<p>The capillary pressure in the patient's legs is HIGHER than in the other parts of her body due to the added pressure 
of the columns of blood pushing down on her feet and ankles.  As a result, this is where excess filtration takes place 
leading to edema (swelling due to fluid accumulation in the tissues).  As a result, \"She can't fit into her shoes\".</p>

<p>The results of this exercise demonstrate why congestive heart failure patients are more likely to show edema in their lower legs.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);
array_push($problemlist,$subproblemlist);
$subproblemlist = array();
//end section 2



//begin section 3
$ProblemName = '3.  Radius and Resistance';
$ProblemType = ProblemType::calculation;
$ImgSrc = "./images/Resistance.png";
$ProblemText = '<p>The resistance to flow posed by a blood vessel is determined by a number of parameters: length, 
radius, and the viscosity of the fluid flowing through the vessel.  Physiological changes in flow resistance 
are brought about by changes in the radius of the vessel.</p>
<p>What change in arteriolar radius is required to produce a 50% increase in arteriolar resistance?  (The new radius will be ____% 
of the old one.)</p>
<p><b>Enter your answer at the upper right hand corner of the page and Evaluate.</b></p>';
$ProblemAnswer = '90';
$ProblemTolerance = '5';
$AttmeptOne = "<p><b>Sorry, that's incorrect.</b></p> <p>The resistance proportional to 1/radius<sup>4</sup>.</p>";
$AttmeptOneImgSrc = "./images/Resistance.png";
$ExplanationImgSrc = "./images/Resistance.png";
$Explanation = "<p>R is proportional to 1/radius<sup>4</sup>.</p>
<p>We can write:</br>
R = constant/r<sup>4</sup></br>
R1 = k/r<sub>1</sub><sup>4</sup> = 100</br>
R2 = k/r<sub>2</sub><sup>4</sup> = 150 (a 50% increase)</br>
R1/R2 = (k/r<sub>1</sub><sup>4</sup>)/(k/r<sub>2</sub><sup>4</sup>) = 100/150</br>
<sub>2</sub><sup>4</sup>/r<sub>1</sub><sup>4</sup> = .667</br>
<sub>2</sub> = .90r<sub>1</sub></br></p>
<p>This one is pretty hard and you will not be asked to do this calculation on an exam.  However, 
you ARE expected to note the take home point of the exercise:  Because the radius term is raised 
to the 4th power, only a very small change in radius is required to produce a proportionately 
much larger change in resistance.  The physiological control of resistance to blood flow is both powerful and 
exquisit.</p>";

$NewProblem = CreateCalculation($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemTolerance, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);
array_push($problemlist,$subproblemlist);
$subproblemlist = array();
//end section 3

//section 4
$ProblemName = '4.  Compliance';
$ProblemType = ProblemType::calculation;
$ImgSrc = "./images/Compliance.png";
$ProblemText = '<p>Let\'s do another one.</p>
<p>The figure above illustrates the pressure-volume relationships for a vein and a large artery. 
Calculate the compliance of an artery at normal P<sub>artery</sub>.  Give me a value to three numbers 
after the decimal.</p>
<p><b>Enter your answer at the upper right hand corner of the page and Evaluate.</b></p>';
$ProblemAnswer = '0.013';
$ProblemTolerance = '0.01';
$AttmeptOne = "<p><b>Nope</b>. The compliance is the slope of the line over the physiological range (highlighted in red above). 
Go back and see if you can get it, now.</p>";
$AttmeptOneImgSrc = "./images/Compliance Aorta.png";
$ExplanationImgSrc = "./images/Compliance Aorta.png";
$Explanation = "<p>Normal pressure range for the aorta is 60 - 120 mmHg</p>
<p>C<sub>Aorta</sub> = ΔV /ΔP = 0.8 vol units/60 mm Hg = 0.013 vol units/mmHg</p>";
$NewProblem = CreateCalculation($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemTolerance, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = '4.  Compliance';
$ProblemType = ProblemType::calculation;
$ImgSrc = "./images/Compliance.png";
$ProblemText = "<p>This one should now be easy:</p>
<p>Calculate the compliance of a vein at normal P<sub>vein</sub>.
Give me a value to two numbers 
after the decimal.</p>
<p><b>Enter your answer at the upper right hand corner of the page and Evaluate.</b></p>";
$ProblemAnswer = '0.33';
$ProblemTolerance = '0.1';
$AttmeptOne = "<p><b>That's incorrect</b>. <p>The compliance is the slope of the line over the physiological range (highlighted in red above).</p>";
$AttmeptOneImgSrc = "./images/Compliance Vena Cava.png";
$ExplanationImgSrc = "./images/Compliance Vena Cava.png";
$Explanation = "<p>Normal pressure range for the vena cava is 0 - 6 mmHg.  Therefore:</p>
<p>C<sub>Vena Cava</sub> = ΔV/ΔP = 2 vol units/6 mm Hg = 0.33 vol units/mmHg</p>
<p>NOTE: at their normal operating pressures, the veins are very much more compliant than are arteries.</p>";
$NewProblem = CreateCalculation($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemTolerance, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = '4.  Compliance';
$ProblemType = ProblemType::multiplechoice;
$ImgSrc = "./images/Compliance Vena Cava.png";
$ProblemText = "<p>One more.  Smooth muscle is present in the walls of both arteries and veins, and sympathetic stimulation can 
cause that muscle to contract.  <b>Predict the change, if any,  in the compliance of a vein that will 
occur if sympathetic stimulation increases.</b></p>
<p>Sympathetic stimulation will:</br>
A)  decrease compliance</br>
B)  not change the compliance</br>
C)  increase compliance</p>
<p><b>Click on the correct answer in the bar at the upper right hand corner of the page and Evaluate.</b></p>";
$ProblemAnswer = 'A';
$ProblemChoices = 'ABC';
$AttmeptOne = "<b>No.</b>  <p>What will happen to the stiffness of the walls of the vessel if the smooth 
muscle contracts?</p>";
$AttmeptOneImgSrc = "./images/Compliance Vena Cava.png";
$ExplanationImgSrc = "./images/Compliance Vena Cava.png";
$Explanation = "<p>Increased sympathetic stimulation to the veins will cause its smooth muscle 
to contract.  This will make the walls of the vein \"stiffer.\"  That is to say, 
it will take a larger change in pressure to produce a change in the volume of the 
vessel.  Thus, compliance will be decreased.</p>
<p>So why am I once again wasting your time with these calculation?  Press \"Next\" 
and let's see if there's a point is here.";

$NewProblem = CreateMultipleChoice($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemChoices, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = '4.  Compliance';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/Congestive Heart Failure Distended Jugular.png";
$LessonText = "<p>Once again, we have typical complaints and physical exam findings from 
a congestive heart failure patient above.  Note that she has distended \"neck veins\" 
(i.e. the jugular vein).</p>
<p>The jugular distention is indicative of increased venous pressure.  The volume of the veins 
increases with increasing pressure because they are more compliant.  You would not see distention of, 
for instance, the carotid artery in the neck because arteries expand much less for a given 
increase in pressure.</p>
<p> Increased venous pressure is a hall mark of congestive heart failure.  When you see a distended 
jugular vein or larger than usual veins on a radiograph of the chest, CHF should be high on 
your list of differential diagnoses.";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

array_push($problemlist,$subproblemlist);
$subproblemlist = array();

//End section 4

//Begin section 5
$ProblemName = '5.  Mid-capillary Pressures';
$ProblemType = ProblemType::multiplechoice;
$ImgSrc = "./images/Pressure - Resistance.png";
$ProblemText = '</p><p>Let\'s do one more set of problems.</p>
<p>The top above diagram represents the elements making up a circulatory pathway to one of 
the body’s organs.</p>
<p>P<sub>A</sub> = arterial pressure</br>
P<sub>V</sub> = venous pressure</br>
P<sub>C</sub> = the pressure at the midpoint of the capillaries</p>
<p>R<sub>A</sub> = resistance of the arterial compartment</br>
R<sub>V</sub> = resistance of the venous compartment</p>
<p>We can assign a value of 100 mmHg to P<sub>A</sub> and 0 mmHg to P<sub>V</sub>
 (you should know that the actual MAP is about 93 mmHg and the pressure in the vena cava is 
more like about 2 mmHg but 100 and 0 are convenient for calculations.</p>
<p>The bottom figure shows the drop in pressure as you go from compartment to compartment
 along the cardiovascular system from aorta to vena cava.  Note that the blood flow is the 
same in each compartment.  The cardiac output is 5 L/minute so that means blood flow through the 
aorta is 5 L/minute.  It also means that if you add up the flows in each capillary in that 
compartment, the total blood 
flow will be 5 L/min.</p>
<p><b>Given the data in this bottom figure above, how much higher is R<sub>A</sub> than R<sub>V</sub>?</b></p>
<p>Enter the correct number.  R<sub>A</sub> is:</br></br>
A) 2 times R<sub>V</sub></br>
B) 3 times R<sub>V</sub></br>
C) 5 times R<sub>V</sub></p>

<p><b>Click on the correct answer in the bar at the upper right hand corner of the page and Evaluate.</b></p>';
$ProblemAnswer = 'B';
$ProblemChoices = 'ABC';
$AttmeptOne = "<b>Sorry.</b>  <p>Think about Ohm's Law.</p>
<p>ΔP = Q X R</p>
<p>If flow, Q, is constant, what will happen to ΔP when resistance, R, goes up?
How much higher is ΔP across the arterial compartment (including the arterioles) 
compared to the venous compartment (including everything after the capillaries)?</p>
<p>Go back and give it another try.</p>";
$AttmeptOneImgSrc = "./images/Pressure - Resistance.png";
$ExplanationImgSrc = "./images/Pressure - Resistance.png";
$Explanation = "<p>ΔP = Q X R</p>
<p>If flow, Q, is constant, ΔP will decrease as resistance, R, rises.  
the pressure at the beginning of the arterial compartment is 100 mmHg.  It then drops 75 mmHg 
until we reach the capillaries.  The pressure drop across the venous compartment is only 
25 mmHg.  Therefore the resistance of the arterial compartment is 3 times larger than the venous 
compartment.</p>
<p>Note that the principal point of resistance in the cardiovascular system is the arterioles and 
that this is where the greatest drop in pressure takes place.</p>";
$NewProblem = CreateMultipleChoice($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemChoices, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = '5.  Mid-capillary Pressures';
$ProblemType = ProblemType::calculation;
$ImgSrc = "./images/Pressure - Resistance.png";
$ProblemText = '<p>The following equation describes the determinants of the pressure at the midpoint of the capillaries:</p>
<p>P<sub>C</sub> = [(R<sub>V</sub>/R<sub>A</sub>)P<sub>A</sub> + P<sub>V</sub>]/"
[1 + (R<sub>V</sub>/R<sub>A</sub>)].  <b>Calculate a typical mid-capillary pressure, 
P<sub>C</sub>.</b></p>
<p><b>Enter your answer at the upper right hand corner of the page and Evaluate.</b></p>';
$ProblemAnswer = '25';
$ProblemTolerance = '10';
$AttmeptOne = "<p><b>Nope</b>.</p> <p>\"This should be plug and chug\"</p>
R<sub>A</sub>/R<sub>V</sub> = 3</br>
P<sub>A</sub> = 100 mmHg</br>
P<sub>V</sub >= 0 mmHg]</p>";
$AttmeptOneImgSrc = "./images/Pressure - Resistance.png";
$ExplanationImgSrc = "./images/Pressure - Resistance.png";
$Explanation = "<p>With P<sub>A</sub> = 100 mm Hg, P<sub>V</sub> = 0 mm Hg and R<sub>A</sub> = 3* 
R<sub>V</sub> 
P<sub>C</sub> = 25 mm Hg.</p>";
$NewProblem = CreateCalculation($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemTolerance, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = '5.  Mid-capillary Pressures';
$ProblemType = ProblemType::multiplechoice;
$ImgSrc = "./images/Pressure - Resistance.png";
$ProblemText = '<p>The following equation describes the determinants of the pressure at the midpoint of the capillaries:</p>
<p>P<sub>C</sub> = [(R<sub>V</sub>/R<sub>A</sub>)P<sub>A</sub> + P<sub>V</sub>]/
[1 + (R<sub>V</sub>/R<sub>A</sub>)]</p>
<p>Consider equal changes in P<sub>A</sub> and P<sub>V</sub>.  Predict which cause 
the greatest increase in PC (assume the resistances don’t change).</p>
<p>A)	ΔP<sub>A</sub> causes larger change to P<sub>C</sub></br>
B)	ΔP<sub>V</sub> causes larger change to P<sub>C</sub> </br>
C)	ΔP<sub>A</sub> and ΔPV result in equal changes to P<sub>C</sub></p>
<p>To answer this, calculate the change in P<sub>C</sub> that will result from a 10 mm Hg change in P<sub>A</sub> 
(no change in P<sub>V</sub> or the resistances), then calculate the change in P<sub>C</sub> that will 
result from a 10 mm Hg change in P<sub>V</sub> (no change in P<sub>A</sub> or the resistances).</p>

<p><b>Click on the correct answer in the bar at the upper right hand corner of the page and Evaluate.</b></p>';
$ProblemAnswer = 'B';
$ProblemChoices = 'ABC';
$AttmeptOne = "<b>Sorry.  That's incorrect.</b>  <p>This should be \"plug and chug\"</p>
R<sub>A</sub>/R<sub>V</sub> = 3</br>
P<sub>A</sub> = 100 mmHg</br>
P<sub>V</sub >= 0 mmHg]</p>
<p>Make P<sub>A</sub> 110 mmHg, then do it for a P<sub>V</sub> of 10 mmHg.</p>";
$AttmeptOneImgSrc = "./images/Pressure - Resistance.png";
$ExplanationImgSrc = "./images/Pressure - Resistance.png";
$Explanation = "<p>P<sub>C</sub> increases to 27.5 mm Hg, an increase of 2.5 mm Hg (or 10%).</p>
<p>P<sub>C</sub> increases to 32.5 mm Hg an increase of 7.5 mm Hg (or 30%).</p>
<p>As with previous problem of calculating the exact change in resistance with radius 
we will not expect you to calculate mid-capillary pressure on the exam.  However, we 
<b><i>do</i></b> expect you to remember the take home point, which is that change in venous pressure 
have a bigger effect on mid-capillary pressure than changes in arterial pressure.</p>";
$NewProblem = CreateMultipleChoice($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemChoices, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = '5.  Mid-capillary Pressures';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/Congestive Heart Failure Distended Jugular.png";
$LessonText = "<p>Once again we have a case where, when you look closely, 
this begins to look suspiciously like it's relevant to the practice of medicine.<p>
<p>Our congestive heart failure patient has high venous pressures (as indicated 
by her distended neck veins).  This raises her mid-capillary pressure.  
Like most people, she spends a certain amount of time each day in an upright position.  
This raises her mid-capillary pressure even more, mostly in her legs and ankles as 
columns of blood push down on her feet.</p>
<p>The increased mid-capillary pressure causes excess fluid filtration relative to
reabsorbtion in her capillaries.  Fluid accumulates in her feet and ankles (edema) and 
she can't fit into her shoes.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

array_push($problemlist,$subproblemlist);
$subproblemlist = array();
//End of section 5


?>
