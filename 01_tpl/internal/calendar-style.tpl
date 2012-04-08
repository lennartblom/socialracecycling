<style type="text/css">
body {
    font-family:verdana;
    font-size:12px;
}
a.calendar {
    color:black;
    text-decoration: none;
}
a.calendar:hover {
    text-decoration: underline;
    background: #eaeaea;
}

a.calendarlink{
	font-size:10px;
	font-weight:500;
	font-family:Arial, Helvetica, sans-serif;
	color:green;
	text-decoration:underlnone;
}

a.calendarlink:hover{
	text-decoration: underline;
    background: #eaeaea;
}
.calender {
    width:854px;
	border:none;
}
* html .calender,
* + html .calender {
    width:282px;
}
.calender div.after,
.calender div.before{
    color:silver;
}
p.text{
	margin-top:-50px;
	margin-bottom:0px;
	margin-left:-5px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:10px;
	margin-bottom:0px;
}
ul.event{
	color:green;
	margin-top:100px;
	margin-left:-30px;
	font-size:10px;
	font-weight:500;
	font-family:Arial, Helvetica, sans-serif;
	list-style-type:circle;
}
ul.event li{
	margin-top:-185px;
}
.day {
    float:left;
    width:100px;
    height:80px;
    line-height: 100px;
	padding:10px;
	background-color:#ffffff;
    text-align: left;
	border:thin solid #CCC;
}

.day:hover{
	background-color:#e8ffe2;
}
.day.headline {
    background:silver;
	height:30px;
	line-height: 30px;
}
.day.current {
    font-weight:bold;
	color:#2f8ff4;
	background-color:#e9eff8;
}
.clear {
    clear:left;
}

.pagination {
    text-align: center;
    height:20px;
    line-height:20px;
    font-weight: bold;
}
.pagination a {
    width:20px;
    height:20px;
}
</style>