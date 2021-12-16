<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_home extends CI_Controller {
function __construct()

{

parent::__construct();
$this->load->library('form_validation');
$this->load->model('model_student');
}


	
	public function index()
	{
		$this->load->view('homepage');
	}
	
	
	public function apply()
{
$surname = $this->input->post('SURNAME');
$middle = $this->input->post('MIDDLE');
$first = $this->input->post('FIRST');
$choose = $this->input->post('choose');
$regno = $this->input->post('RegNo');
$school = $this->input->post('School');
$dept = $this->input->post('Dept');
$course = $this->input->post('Course');
$duration = $this->input->post('Duration');
$yearofstudy = $this->input->post('YearOfStudy');
$semester = $this->input->post('Semester');
$feepayable = $this->input->post('FeePayable');
$feebalance = $this->input->post('FeeBalance');
$ammountapplied = $this->input->post('ammountapplied');
$purpose = $this->input->post('Purpose');
$orphan = $this->input->post('Orphan');
$illness = $this->input->post('illness');
   if($illness==''){$illness='Null';}
$disability = $this->input->post('disability');
   if($disability==''){$disability='Null';}
$others = $this->input->post('others');
$idno = $this->input->post('idno');
$contact = $this->input->post('Contact');
$email = $this->input->post('email');
$gender = $this->input->post('gender');
$age = $this->input->post('age');
$maritalstatus = $this->input->post('maritalstatus');
$county = $this->input->post('county');
$constituency = $this->input->post('constituency');
$location = $this->input->post('location');
$sublocation = $this->input->post('sublocation');
$village_estate = $this->input->post('village/Estate');
$secschool = $this->input->post('secschool');
$year = $this->input->post('year');
$examindexno = $this->input->post('examindexno');
$kcsemg = $this->input->post('KCSEMG');
$sdisability = $this->input->post('s_disability');
$specify = $this->input->post('Specify');
$pobox = $this->input->post('pobox');
$postalcode = $this->input->post('postalcode');
$telno = $this->input->post('telno');
$flastname = $this->input->post('F_LASTNAME');
$ffirstname = $this->input->post('F_FIRSTNAME');
$fidno = $this->input->post('F_IDNO');
$flifestatus = $this->input->post('F_LifeStatus');
$foccupation = $this->input->post('F_OCCUPATION');
$fannualincome = $this->input->post('F_ANNUALINCOME');
$fothersources = $this->input->post('F_OtherSources');
$mlastname = $this->input->post('M_LASTNAME');
$mfirstname = $this->input->post('M_FIRSTNAME');
$midno = $this->input->post('M_IDNO');
$mlifestatus = $this->input->post('M_LifeStatus');
$moccupation = $this->input->post('M_OCCUPATION');
$mannualincome = $this->input->post('M_ANNUALINCOME');
$mothersources = $this->input->post('M_OtherSources');
$glastname = $this->input->post('G_LASTNAME');
$gfirstname = $this->input->post('G_FIRSTNAME');
$rship = $this->input->post('RSHIP');
$gidno = $this->input->post('G_IDNO');
$goccupation = $this->input->post('G_OCCUPATION');
$gannualincome = $this->input->post('G_ANNUALINCOME');
$name1 = $this->input->post('name1');
$sch_inst1 = $this->input->post('sch/inst1');
$class1 = $this->input->post('class1');
$age1 = $this->input->post('age1');
$feechargedperyear1 = $this->input->post('feechargedperyear1');
$workstudy = $this->input->post('workstudy');
$workperiod = $this->input->post('workPeriod');
$accomodated = $this->input->post('accomodated');
$accperiod = $this->input->post('acc_Period');
$bursary = $this->input->post('bursary');
$burperiod = $this->input->post('bur_Period');
$academicleave = $this->input->post('academicleave');
$leaveperiod = $this->input->post('leavePeriod');
$deffered = $this->input->post('deffered');
$defperiod = $this->input->post('defPeriod');
$latereg = $this->input->post('latereg');
$period = $this->input->post('Period');
$sponsorship = $this->input->post('sponsorship');
$details = $this->input->post('details');
$reason = $this->input->post('reason');


/*
$this->form_validation->set_rules('SURNAME','SURNAME','required');
$this->form_validation->set_rules('MIDDLE','MIDDLE','required');
$this->form_validation->set_rules('FIRST','FIRST','required');
$this->form_validation->set_rules('choose','choose','required');
$this->form_validation->set_rules('Regno','Regno','required');
$this->form_validation->set_rules('School','School','required');
$this->form_validation->set_rules('Dept','Dept','required');
$this->form_validation->set_rules('Course','Course','required');
$this->form_validation->set_rules('Duration','Duration','required');
$this->form_validation->set_rules('YearOfStudy','YearOfStudy','required');
$this->form_validation->set_rules('Semester','Semester','required');
$this->form_validation->set_rules('FeePayable','FeePayable','required');
$this->form_validation->set_rules('FeeBalance','FeeBalance','required');
$this->form_validation->set_rules('ammountapplied','ammountapplied','required');
$this->form_validation->set_rules('purpose','purpose','required');
$this->form_validation->set_rules('orphan','orphan','required');
$this->form_validation->set_rules('illness','illness','required');
$this->form_validation->set_rules('disability','disability','required');
$this->form_validation->set_rules('others','others','required');
$this->form_validation->set_rules('idno','idno','required');
$this->form_validation->set_rules('contact','contact','required');
$this->form_validation->set_rules('email','email','required');
$this->form_validation->set_rules('gender','gender','required');
$this->form_validation->set_rules('age','age','required');
$this->form_validation->set_rules('maritalstatus','maritalstatus','required');
$this->form_validation->set_rules('county','county','required');
$this->form_validation->set_rules('constituency','constituency','required');
$this->form_validation->set_rules('location','location','required');
$this->form_validation->set_rules('sublocation','sublocation','required');
$this->form_validation->set_rules('village/Estate','village/Estate','required');
$this->form_validation->set_rules('secschool','secschool','required');
$this->form_validation->set_rules('year','year','required');
$this->form_validation->set_rules('examindexno','examindexno','required');
$this->form_validation->set_rules('KCSEMG','KESEMG','required');
$this->form_validation->set_rules('s_disability','s_disability','required');
$this->form_validation->set_rules('Specify','Specify','required');
$this->form_validation->set_rules('pobox','pobox','required');
$this->form_validation->set_rules('postalcode','postalcode','required');
$this->form_validation->set_rules('telno','telno','required');
$this->form_validation->set_rules('F_LASTNAME','F_LASTNAME','required');
$this->form_validation->set_rules('F_FIRSTNAME','F_FIRSTNAME','required');
$this->form_validation->set_rules('F_IDNO','F_IDNO','required');
$this->form_validation->set_rules('F_LifeStatus','F_LifeStatus','required');
$this->form_validation->set_rules('F_OCCUPATION','F_OCCUPATION','required');
$this->form_validation->set_rules('F_ANNUALINCOME','F_ANNUALINCOME','required');
$this->form_validation->set_rules('F_OtherSources','F_OtherSources','required');
$this->form_validation->set_rules('M_LASTNAME','M_LASTNAME','required');
$this->form_validation->set_rules('M_FIRSTNAME','M_FIRSTNAME','required');
$this->form_validation->set_rules('M_IDNO','M_IDNO','required');
$this->form_validation->set_rules('M_LifeStatus','M_LifeStatus','required');
$this->form_validation->set_rules('M_OCCUPATION','M_OCCUPATION','required');
$this->form_validation->set_rules('M_ANNUALINCOME','M_ANNUALINCOME','required');
$this->form_validation->set_rules('M_OtherSources','M_OtherSources','required');
$this->form_validation->set_rules('G_LASTNAME','G_LASTNAME','required');
$this->form_validation->set_rules('G_FIRSTNAME','G_FIRSTNAME','required');
$this->form_validation->set_rules('RSHIP','RSHIP','required');
$this->form_validation->set_rules('G_IDNO','G_IDNO','required');
$this->form_validation->set_rules('G_OCCUPATION','G_OCCUPATION','required');
$this->form_validation->set_rules('G_ANNUALINCOME','G_ANNUALINCOME','required');
$this->form_validation->set_rules('name1','name1','required');
$this->form_validation->set_rules('sch/inst1','sch/inst1','required');
$this->form_validation->set_rules('class1','class1','required');
$this->form_validation->set_rules('age1','age1','required');
$this->form_validation->set_rules('feechargedperyear1','feechargedperyear1','required');
$this->form_validation->set_rules('workstudy','workstudy','required');
$this->form_validation->set_rules('workperiod','workperiod','required');
$this->form_validation->set_rules('accomodated','accomodated','required');
$this->form_validation->set_rules('acc_period','acc_period','required');
$this->form_validation->set_rules('bursary','bursary','required');
$this->form_validation->set_rules('bur_period','bur_period','required');
$this->form_validation->set_rules('academicleave','academicleave','required');
$this->form_validation->set_rules('leaveperiod','leaveperiod','required');
$this->form_validation->set_rules('deffered','deffered','required');
$this->form_validation->set_rules('defperiod','defperiod','required');
$this->form_validation->set_rules('latereg','latereg','required');
$this->form_validation->set_rules('period','period','required');
$this->form_validation->set_rules('sponsorship','sponsorship','required');
$this->form_validation->set_rules('details','details','required');
$this->form_validation->set_rules('reason','reason','required');*/




     if($this->input->post('submit') == "Apply")
	 {
	   $data = array(
              'surname' => $surname,
              'middle' => $middle ,
              'first' => $first,
			   'choose' => $choose,
              'regno' => $regno ,
              'school' => $school,
			   'dept' => $dept,
              'course' => $course ,
              'dur' => $duration,
			   'yos' => $yearofstudy,
              'sem' => $semester ,
              'fees' => $feepayable,
			   'balance' => $feebalance,
			   'amount' => $ammountapplied ,
			   'purpose' => $purpose ,
              'orphan' => $orphan ,
              'illness' => $illness,
			   'disability' => $disability,
              'specify' => $others ,
			  'idno' => $idno,
			   'contact' => $contact,
              'email' => $email, 
              'gender' => $gender,
			   'age' => $age,
              'maritalstatus' => $maritalstatus ,
              'county' => $county,
			   'constituency' => $constituency,
              'location' => $location ,
              'sublocation' => $sublocation,
			   'village' => $village_estate,
              'secschool' => $secschool,
              'yearcomp' => $year,
			   'indexno' => $examindexno,
              'kcse_mg' => $kcsemg,
              's_disability' => $sdisability,
			   'specify_dis' => $specify,
              'pobox' => $pobox ,
              'postal_code' => $postalcode,
			   'telephone' => $telno,
			   'f_lastname' => $flastname,
              'f_firstname' => $ffirstname ,
              'f_idno' => $fidno,
			   'f_alive' => $flifestatus,
              'f_occupation' => $foccupation ,
              'f_annualincome' => $fannualincome,
			  'f_sources' => $fothersources ,
			  'm_lastname' => $mlastname,
              'm_firstname' => $mfirstname ,
              'm_idno' => $midno,
			   'm_alive' => $mlifestatus,
              'm_occupation' => $moccupation ,
              'm_annualincome' => $mannualincome,
			  'm_sources' => $mothersources ,
			  'g_lastname' => $glastname,
              'g_firstname' => $gfirstname ,
			  'relationship' => $rship,
              'g_idno' => $gidno,
              'g_occupation' => $goccupation ,
              'g_annualincome' => $gannualincome,
			  's_name' => $name1 ,
			  's_school' => $sch_inst1,
              'class' => $class1 ,
              's_age' => $age1,
			   's_fee' => $feechargedperyear1, 
			   'workstudy' => $workstudy,
              'workperiod' => $workperiod ,
              'accomodated' => $accomodated,
			  'acc_period' => $accperiod ,
			  'bursary' => $bursary,
              'bur_period' => $burperiod ,
			  'academic_leave' => $academicleave,
              'leave_period' => $leaveperiod,
              'deffered' => $deffered ,
              'def_period' => $defperiod,
			  'latereg' => $latereg ,
			  'period' => $period,
              'sponsorship' => $sponsorship ,
              'details' => $details,
			  'reason_for_award' => $reason,             
                                );
	 $this->load->model('model_student');
     $insertId = $this->model_student->insertapplication($data);
   
 }
}

}
