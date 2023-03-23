<!DOCTYPE HTML>

<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Lato:400,100,300,100italic,300italic,400italic,500italic,500,700,700italic,900,900italic' rel='stylesheet' type='text/css'>


    <meta charset="UTF-8">
    <title>Resume</title>
    <style>
body {
    margin: 40px;
    font-family: 'Lato';
    font-size: 12pt;
}

header {
    font-family: 'Lato';
    padding-bottom: 10px;
    margin-top: -100px;
    /* border-bottom: 1px solid black !important; */
}

header h1 {
    font-size: 20pt;
    letter-spacing: 2pt;
    border-bottom: 1px solid black;
    margin-bottom: 4px;
}

header span {
    font-size: 10pt;
    /* float: right; */
}

section h2 {
    font-family: 'Lato';
    font-size: 14pt;
}

section p {
    margin-left: 40px;
}

section.coverletter {
    margin-top: 40px;
}

section.coverletter p {
    margin-left: 0px;
}

section ul {
    list-style-type: circle;
}

.jobtable {
    display: table;
    width: 100%;
    /*border-bottom: 1px solid black;*/
    margin-left: 0px;
}

.edtable {
  /* //  display: table; */
    width: 100%;
    margin-left: 10px;
    padding-bottom: 15px;
}

.skillstable {
    display: table;
    width: 100%;
}

.table {
    display: table;
    margin-left: 20px;
}

.tablerow {
    display: table-row;
}

.jobtitle {
    display: table-cell;
    /*font-style: italic;*/
}

.right {
    display: table-cell;
    text-align: right;
}
.right1 {
    display: table-cell;
   
}
.cell {
    display: table-cell;
}

.onlinecell {
    /*font-style: italic;*/
    padding-right: 10px;
}

.urlcell {
    display: table-cell;
    letter-spacing: 1px;
}

.pagebreak {
    page-break-before: always;
}
.image {
        flex-basis: 40%
      }
 .text {
        font-size: 20px;
        padding-left: 20px;
}
.container1 {
        display: flex;
        align-items: center;
        justify-content: center
      }
#container {
    position: relative;    
    top: -64px;
    margin-left:-90px  !important;
    margin-right:-90px  !important;

}
.bullet-check{
    margin-left:15px  !important;
    color:#706f6f   !important;

}
#example {
   position: absolute;
   top: -48px;
    left: 10px;
    padding: 60px;
 
}
.full-width{
  
    
        left: 100px !important;
        right: 0 !important;
}
.space{
    margin: 10px 0;
}


.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 15px; /* Should be removed. Only for demonstration */
}
.column1 {
  float: left;
  width: 65%;
  padding: 10px;
  height: 15px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
    </style>
</head>

<body>
<!-- <div class="container1">
    <div class="text">
        <h1>Akhil Soman</h1>
    <div>
 <div class="image">

<img width="60" src="http://accounts.hashroot.com/assets/media/logo.png"/>

</div>	

</div> -->

<div id="container">
<img style="width:100%;" class="full-width" src="https://www.rapidbrains.com/assets/img/svg/header-rb.png" >
    <div id="example"><br>
    <span style="text-transform:uppercase;font-size:28;color:#343f52; letter-spacing: 2px;"><b>{!! $data['fullname'] !!}</b></span><br>
    <div style="padding-top:10px;"></div>
   <span  style="text-transform:uppercase; letter-spacing: 2px;color:#464a4e;">{!! $data['position'] !!}</span><br>
   <div style="padding-top:10px;"></div>
        <span style="text-transform:uppercase; letter-spacing: 2px;color:#464a4e">TALENT ID: {!! $data['talentid'] !!}</span>
      

    </div>
</div>

    <header id="info" style="margin-left:-10px;margin-bottom:30px;">
   
<div class="row" style="margin-top: 40px;">
  <div class="column" >
   
    <span style="color: #706f6f;"><img style="width:4%;" src="https://www.rapidbrains.com/assets/img/icons/phone.png" > &nbsp;&nbsp;+91 977 8426 319 </span>
  </div>
  <div class="column1" >
    <span style="color: #706f6f;"><img style="width:3%;"  src="https://www.rapidbrains.com/assets/img/icons/2.png" > &nbsp;&nbsp;{!! $data['email'] !!}</span>
  </div>
</div>

<div class="row">
  <div class="column" >
  <img style="width:4%;"  src="https://www.rapidbrains.com/assets/img/icons/3.png" >
    <span style="color: #706f6f;">&nbsp;&nbsp;Ground Floor, Athulya, Infopark,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kochi, Kerala, India</span>
  </div>
  <div class="column1" >
  <img style="width:3%;" src="https://www.rapidbrains.com/assets/img/icons/4.png" ><span style="color: #706f6f;">&nbsp;&nbsp;  www.rapidbrains.com</span>
  </div>
</div>
    </header>
    <section id="statement">
        <h2 style="border-bottom: 1px solid black;font-size: 18px;padding-bottom:5px;text-transform:uppercase;color:#343f52;">Profile</h2>
      

            
                <div style="font-size: 12px;color:#706F6F; margin-left: -35px;">{!! $data['summary'] !!}</div>
       
          
          
       
     
    </section>
    @if(count($data['kt_docs_repeater_basic_count'])>0)
    <section id="employment">
        <h2 style="border-bottom: 1px solid black;font-size: 18px;padding-bottom:5px;text-transform:uppercase;color:#343f52;">Experience</h2>
        @foreach($data['experience'] as $exp)
        <section>
            <div class="jobtable">
            <div class="tablerow">
                <span style="font-size: 12px;text-transform:uppercase;color:#464A4E;text-transform:uppercase;">{!! $exp['jobtitle'] !!}</span>
                @if(!isset($exp['to']))
                <span style="padding-left:380px;font-size: 12px;color:#706F6F;">{!! date("M-Y", strtotime($exp['from'])) !!} - Present</span>
                @else
                <span style="padding-left:370px;font-size: 12px;color:#706F6F;">{!! date("M-Y", strtotime($exp['from'])) !!} - {!! date("M-Y", strtotime($exp['to'])) !!}</span>
                @endif
            </div>
            <div class="tablerow">
                <span style="font-size: 12px;color:#706F6F;">@if($exp['employer']){!! $exp['employer'] !!} @endif @if($exp['city']), {!! $exp['city'] !!} @endif @if($exp['state']), 
                {!! $exp['state'] !!}@endif @if($exp['country']), {!! $exp['country'] !!}@endif</span>
            </div>
            @if(isset($exp['job_description']))
                <span style="font-size: 12px;color:#706F6F;">{!! $exp['job_description'] !!}</span>
                @endif
                @if(isset($exp['job_projects']))
                <span style="font-size: 12px;color:#706F6F;">{!! $exp['job_projects'] !!}</span>
    @endif
            </div>
        </section>
        @endforeach
       
    </section>
    @endif
    <section id="skills">
        <h2 style="border-bottom: 1px solid black;font-size: 18px;padding-bottom:5px;text-transform:uppercase;color:#343f52;">Skills</h2>
       
             <div  style="font-size: 12px;color:#706F6F;margin-left: -35px;">{!! $data['skills'] !!}</div>
           
    </section>
    @if(count($data['kt_docs_repeater_basi_count'])>0)
    
    <section id="projects">
        <h2 style="border-bottom: 1px solid black;font-size: 18px;padding-bottom:5px;text-transform:uppercase;color:#343f52;">Projects</h2>
        @foreach($data['projects'] as $prj)
        <section>
            <div class="jobtable">
            <div class="tablerow">
                <span class="jobtitle" style="font-size: 13px;color:#464A4E;text-transform:uppercase;">{!! $prj['project_name'] !!}</span>
                <span style="font-size: 12px;color:#706F6F;">{!! $prj['project_duration'] !!}</span>
            </div>
            @if(isset($prj['project_description']))
                <span style="font-size: 12px;color:#706F6F;">{!! $prj['project_description'] !!}</span>
    @endif
    @if(isset($prj['roles_responsibility']))
                <span style="font-size: 12px;color:#706F6F;">{!! $prj['roles_responsibility'] !!}</span>
   
    @endif
            </div>
        </section>
        @endforeach
    </section>
      @endif
      @if(count($data['certifications_count'])>0)
     
    <section id="certifications">
        <h2 style="border-bottom: 1px solid black;font-size: 18px;padding-bottom:5px;text-transform:uppercase;color:#343f52;">Certifications</h2>
        @foreach($data['certifications'] as $cert)
        <section>
            <div class="jobtable" style="padding-bottom:10px;">
            <div class="tablerow" style="padding-bottom:3px;">
                <span class="jobtitle" style="font-size: 13px;color:#464A4E;text-transform:uppercase;">{!! $cert['certification'] !!}</span>
            </div>
            <div class="tablerow">
                <span style="font-size: 12px;color:#706F6F;">{!! $cert['certification_description'] !!}</span>
            </div>
            </div>
        </section>
        @endforeach
    </section>
      @endif
      @if(count( $data['kt_docs_repeater_education_count'])>0)
    <section id="education">
        <h2 style="border-bottom: 1px solid black;font-size: 18px;padding-bottom:8px;text-transform:uppercase;color:#343f52;">Education</h2>
        @foreach($data['education_details'] as $edu)
        <section>
            <div class="jobtable">
            <div class="tablerow">
                <span class="jobtitle" style="font-size: 12px;color:#464A4E;text-transform:uppercase;">{!! $edu['education_course'] !!}</span>
            </div>
            <div class="tablerow" style="font-size: 12px;color:#706F6F;">
                <span>{!! $edu['education_institute'] !!}, {!! $edu['education_location'] !!}</span>
            </div>
            <div class="tablerow" style="font-size: 12px;color:#706F6F;">
                <span>{!! $edu['education_duration'] !!}</span>
            </div>
            </div>
        </section>
       @endforeach
    </section>
    @endif
   
</body>
</html>