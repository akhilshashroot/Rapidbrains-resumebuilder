<html>

            <head><meta charset="utf-8">
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
#container12 {
    position: relative;    
    top: -80px;
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
            <div id="container">
    <p style="text-transform:uppercase;font-size:28;color:#343f52; letter-spacing: 2px;"><b>{{strtoupper($data['fullname']) }}</b></p>
    <p  style="text-transform:uppercase; letter-spacing: 2px;color:#464a4e;">{!! $data['position'] !!}</p>
   <p style="text-transform:uppercase; letter-spacing: 2px;color:#464a4e">TALENT ID: {!! $data['talentid'] !!}</p>
   
</div>
<header id="info">
    <span style="color: #706f6f;">+91 977 8426 319 </span>
    <span style="color: #706f6f;">{!! $data['email'] !!}</span>
    <span style="color: #706f6f;">Ground Floor, Athulya, Infopark,<br>Kochi, Kerala, India</span>
    <span style="color: #706f6f;">www.rapidbrains.com</span>
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
                <div style="font-size: 12px;text-transform:uppercase;color:#464A4E;text-transform:uppercase;font-weight:500;">{!! $exp['jobtitle'] !!}</div>
                <div style="font-size: 12px;color:#706F6F;">@if($exp['employer']){!! $exp['employer'] !!} @endif @if($exp['city']), {!! $exp['city'] !!} @endif @if($exp['state']), 
                {!! $exp['state'] !!}@endif @if($exp['country']), {!! $exp['country'] !!}@endif</div>

                @if(!isset($exp['to']) && isset($exp['from']))
                <div style="font-size: 12px;color:#706F6F;">{!! date("M-Y", strtotime($exp['from'])) !!} - Present</div>
                @elseif(isset($exp['to']) && isset($exp['from']))
                <div style="font-size: 12px;color:#706F6F;">{!! date("M-Y", strtotime($exp['from'])) !!} - {!! date("M-Y", strtotime($exp['to'])) !!}</div>
                @endif
             
            
            @if(isset($exp['job_description']))
                <div style="font-size: 12px;color:#706F6F;margin-left: -35px;">{!! $exp['job_description'] !!}</div>
                @endif
                @if(isset($exp['job_projects']))
                <div style="font-size: 12px;color:#706F6F;margin-left: -35px;">{!! $exp['job_projects'] !!}</div>
    @endif
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
        <h2 style="border-bottom: 1px solid black;font-size: 18px;padding-bottom:5px;text-transform:uppercase;color:#343f52;">Projects</h2></br>
        @foreach($data['projects'] as $prj)
        <section>
                <div  style="font-size: 13px;color:#464A4E;text-transform:uppercase;">{!! $prj['project_name'] !!}</div>
                @if(isset($prj['project_duration']))<div style="font-size: 12px;color:#706F6F;">{!! $prj['project_duration'] !!}</div>   @endif
            @if(isset($prj['project_description']))
                <div style="font-size: 12px;color:#706F6F;margin-left: -35px;">{!! $prj['project_description'] !!}</div>
    @endif
    @if(isset($prj['roles_responsibility']))
                <div style="font-size: 12px;color:#706F6F;margin-left: -35px;">{!! $prj['roles_responsibility'] !!}</div>
   
    @endif
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
         
            </div>

            <div style="font-size: 12px;color:#706F6F;margin-left: -35px;">{!! $cert['certification_description'] !!}</div>
        </section>
        @endforeach
    </section>
      @endif
      @if(count( $data['kt_docs_repeater_education_count'])>0)
    <section id="education">
        <h2 style="border-bottom: 1px solid black;font-size: 18px;padding-bottom:8px;text-transform:uppercase;color:#343f52;">Education</h2>
        @foreach($data['education_details'] as $edu)
        <section>
            <div class="jobtable" style="padding-bottom:10px;">
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