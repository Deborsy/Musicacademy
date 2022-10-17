<!DOCTYPE html>
	<html>
		<head>
			<title>Signup page</title>
			<link rel="stylesheet" type="text/css" href="style.css">
			<style type="text/css">
body {
    background-color: yellow;
    position: relative;
    -webkit-animation-name: example; /* Chrome, Safari, Opera */
    -webkit-animation-duration: 4s; /* Chrome, Safari, Opera */
    -webkit-animation-iteration-count: 1000; /* Chrome, Safari, Opera */
    animation-name: example;
    animation-duration: 4s;
    animation-iteration-count: 1000;
    border-radius: 25px;
	}

	/* Chrome, Safari, Opera */
@-webkit-keyframes example {
    0%   {background-color:red;}
    25%  {background-color:yellow;}
    50%  {background-color:blue;}
    75%  {background-color:green;}
    100% {background-color:red; }
}

/* Standard syntax */
@keyframes example {
    0%   {background-color:red;}
    25%  {background-color:yellow;}
    50%  {background-color:blue;}
    75%  {background-color:green;}
    100% {background-color:red;}
}				
/*this one uis for button*/
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '>';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
			</style>
		</head>
			<body>
				<header>
	<br>
	
		<div class="container">
			<nav class="main_nav">
				<div class="logo">
					Musicacademy
				</div>

				<ul>
					<li><a href="home.php" class="active" >Home</a></li>
					<li><a href="video.php"></a></li>
					<li><a href="#">Chatroom</a></li>
					<li><a href="#">Login</a></li>
					<li><a href="#">Signup</a></li>
				</ul>
			</nav>
		</div>


		<div class="clearfix"></div>
		
</header>
			<div id="signupform">
							<form action="includes/signup.php" method="POST">
					<p><input type="text" name="first" placeholder="Enter your Firstname here"></p>
					<p><input type="text" name="second" placeholder="Enter your Lastname here"></p>
					<p><input type="text" name="Email" placeholder="Enter your Email here"></p>
					<p><input type="text" name="number" placeholder="Enter your Number here"></p>
					<p>
						Choice of instrument:
						<select name="instrument">
							<option value="guitar">Guitar</option>
							<option value="piano">Piano</option>
							<option value="violin">Violin</option>
							<option value="saxophone">Saxophone</option>
							<option value="trumpet">Trumpet</option>
							<option value="trombone">Trombone</option>
							<option value="drumset">Drumset</option>
							<option value="clarinet">Clarinet</option>
						</select>
					</p>
				Date of birth
					<select name="day1">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							Day
						</select>
						<select name="month1">
							<option value="January">January</option>
							<option value="February">February</option>
							<option value="March">March</option>
							<option value="April">April</option>
							<option value="May">May</option>
							<option value="June">June</option>
							<option value="July">July</option>
							<option value="August">August</option>
							<option value="September">September</option>
							<option value="October">October</option>
							<option value="November">November</option>
							<option value="December">December</option>
							Month:
						</select>
						
						<select name="year1">
							<option>1990</option>
							<option>1991</option>
							<option>1992</option>
							<option>1993</option>
							<option>1994</option>
							<option>1995</option>
							<option>1996</option>
							<option>1997</option>
							<option>1998</option>
							<option>1999</option>
							<option>2000</option>
							<option>2001</option>
							<option>2002</option>
							<option>2003</option>
							<option>2004</option>
							<option>2005</option>
							<option>2006</option>
							<option>2007</option>
							<option>2008</option>
							<option>2009</option>
							<option>2010</option>
							<option>2011</option>
							<option>2012</option>
							<option>2013</option>
							<option>2014</option>
							<option>2015</option>
							<option>2016</option>
							<option>2017</option>
							<option>2018</option>
							<option>2019</option>
							<option>2020</option>
							<option>2021</option>
							<option>2022</option>
						</select>
					<p>
						Gender: <select name="gender">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</p>
					Pick Days For Class<br>
					<input type="checkbox" name="day2" value="Monday">Monday<br>
					<input type="checkbox" name="day3"value="Tuesday">Tuesday<br>
					<input type="checkbox" name="day4"value="Wednesday">Wednesday<br>
					<input type="checkbox" name="day5"value="Thursday">Thursday<br>
					<input type="checkbox" name="day6"value="Friday">Friday<br>
					<input type="checkbox" name="day7"value="Saturday">Saturday<br>
					<input type="checkbox" name="day8" value="Sunday">Sunday<br>

					<p>
						Start Day & Time
						<select name="month">
							<option>January</option>
							<option>February</option>
							<option>March</option>
							<option>April</option>
							<option>May</option>
							<option>June</option>
							<option>July</option>
							<option>August</option>
							<option>September</option>
							<option>October</option>
							<option>November</option>
							<option>December</option>
						</select>
						<select name="day">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
							<option>13</option>
							<option>14</option>
							<option>15</option>
							<option>16</option>
							<option>17</option>
							<option>18</option>
							<option>19</option>
							<option>20</option>
							<option>21</option>
							<option>22</option>
							<option>23</option>
							<option>24</option>
							<option>25</option>
							<option>26</option>
							<option>27</option>
							<option>28</option>
							<option>29</option>
							<option>30</option>
							<option>31</option>						
						</select>
						<select name="year">
							<option>1990</option>
							<option>1991</option>
							<option>1992</option>
							<option>1993</option>
							<option>1994</option>
							<option>1995</option>
							<option>1996</option>
							<option>1997</option>
							<option>1998</option>
							<option>1999</option>
							<option>2000</option>
							<option>2001</option>
							<option>2002</option>
							<option>2003</option>
							<option>2004</option>
							<option>2005</option>
							<option>2006</option>
							<option>2007</option>
							<option>2008</option>
							<option>2009</option>
							<option>2010</option>
							<option>2011</option>
							<option>2012</option>
							<option>2013</option>
							<option>2014</option>
							<option>2015</option>
							<option>2016</option>
							<option>2017</option>
							<option>2018</option>
							<option>2019</option>
							<option>2020</option>
							<option>2021</option>
							<option>2022</option>
						</select>at
						<select name="hour">
							<option>12</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
							<option>11</option>
						</select>
						<select name="min">
							<option>00</option>
							<option>01</option>
							<option>02</option>
							<option>03</option>
							<option>04</option>
							<option>05</option>
							<option>06</option>
							<option>07</option>
							<option>08</option>
							<option>09</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
							<option>13</option>
							<option>14</option>
							<option>15</option>
							<option>16</option>
							<option>17</option>
							<option>18</option>
							<option>19</option>
							<option>20</option>
							<option>21</option>
							<option>22</option>
							<option>23</option>
							<option>24</option>
							<option>25</option>
							<option>26</option>
							<option>27</option>
							<option>28</option>
							<option>29</option>
							<option>30</option>
							<option>31</option>
							<option>32</option>
							<option>33</option>
							<option>34</option>
							<option>35</option>
							<option>36</option>
							<option>37</option>
							<option>38</option>
							<option>39</option>
							<option>40</option>
							<option>41</option>
							<option>42</option>
							<option>43</option>
							<option>44</option>
							<option>45</option>
							<option>46</option>
							<option>47</option>
							<option>48</option>
							<option>49</option>
							<option>50</option>
							<option>51</option>
							<option>52</option>
							<option>53</option>
							<option>54</option>
							<option>55</option>
							<option>56</option>
							<option>57</option>
							<option>58</option>
							<option>59</option>
						</select>
						<select name="format">
							<option>Am</option>
							<option>Pm</option>
						</select>
					</p>
					Comment:<br>
					<textarea name="text" placeholder="Write your Comment here"></textarea><br><br>
						<button type="submit" name="sgnupsub" class="button"><span>SIGN UP</span></button>	
					
					</form>	
			</div>

				
