

<div class="container box_header">

<h4><?=$title?></h4>
<?php echo form_open('admissions/admissionapplicationform')?>
 

 <ul  class="nav nav-tabs" >
    <li class="nav-items active_tab1" style="border: 1px solid #cccc;" ><a >Basic Information</a></li>
    <li class="nav-items inactive_tab1" style="border: 1px solid #cccc"><a>Personal Information</a></li>
    <li class="nav-items  inactive_tab1" style="border: 1px solid #cccc"><a >Education Information</a></li>
    <li class="nav-items inactive_tab1" style="border: 1px solid #cccc" ><a >Spiritual/Church Information</a></li>
    <li class="nav-items  inactive_tab1" style="border: 1px solid #cccc"><a >School Entrance Details</a></li>
 </ul>
 </div>
 <div class="container box_application">
  
 
  <div class="tab-content">
  <div class="tab-pane active " id="basic_information">
  <div class="panel panel-default">
     <div class="panel-heading">Basic Information
       <div class="panel-body">
         <div claas="form-group">
          <label >Surname</label>
          <input type="text" class="form-control" name="surname" placeholder="Surname">
         </div>
         <div claas="form-group">
          <label >Firstname</label>
          <input type="text" class="form-control" name="firstname" placeholder="Firstname">
         </div>

         <div claas="form-group">
          <label >Othername</label>
          <input type="text" class="form-control" name="othername" placeholder="Othername">
         </div>
         
         <div claas="form-group">
          <label >Gender-</label>
          <label class="in-line">
            <input type="radio" name="gender" value="male" checked >Male
          </label>

          <label class="in-line">
            <input type="radio" name="gender" value="female" checked >Female
          </label>
         </div>

         <div claas="form-group">
          <label >Age</label>
          <input type="text" class="form-control" name="age" placeholder="Age">
         </div>

         <div claas="form-group">
          <label >Religion</label>
          <input type="text" class="form-control" name="religion" placeholder="Religion">
         </div>
       </div>

       <div align="center">
         <!-- <button type="button" class="btn btn-default btn-lg"> Previous</button> -->
         <button type="button" class="btn btn-info btn-lg"> Next </button>
       
       </div>
     </div>

  </div>
   
   
     <div class="tab-pane fade">
       <div class="panel panel-default">
        <div class="panel-heading"> Personal Information
         <div class="panel-body">
           <div class="form-group">
            <label >Genotype</label>
             <input type="text" class="form-control" name="genotype" placeholder="Genotype">
           </div>

           <div class="form-group">
            <label >Blood Group</label>
             <input type="text" class="form-control" name="bloodgroup" placeholder="Blood Group">
           </div>

           <div class="form-group">
            <label >Physical Health Challenge</label>
             <input type="text" class="form-control" name="healthissue" placeholder="Physical Health Challenge">
           </div>
         
         </div>
        
        </div>
       </div>

       <div align="center">
         <button type="button" class="btn btn-default btn-lg"> Previous</button>
         <button type="button" class="btn btn-info btn-lg"> Next </button>
       
       </div>
     
     </div>

     <!-- <div class="tab-pane ">
       <div class="panel panel-default">
        <div class="panel-heading"> Details about your spiritual and church 
         <div class="panel-body">
           <div class="form-group">
            <label >Full name of Church</label>
             <input type="text" class="form-control" name="church" placeholder="Church Name">
           </div>

           <div class="form-group">
            <label >Church Denomination</label>
             <input type="text" class="form-control" name="churchdenomiation" placeholder="Church Denomination">
           </div>

           <div class="form-group">
            <label >Full name of Pastor</label>
             <input type="text" class="form-control" name="healthissue" placeholder="Physical Health Challenge">
           </div>
         
         </div>
        
        </div>
       </div>

       <div align="center">
         <button type="button" class="btn btn-default btn-lg"> Previous</button>
         <button type="button" class="btn btn-info btn-lg"> Next </button>
       
       </div>
     
     </div> -->

     <div class="tab-pane fade ">
       <div class="panel panel-default">
        <div class="panel-heading"> Details on pervious eduction
         <div class="panel-body">
           <div class="form-group">
            <label >Primary School Attended</label>
             <input type="text" class="form-control" name="primaryschool" placeholder="">
           </div>

           <div class="form-group" >
            <label class="in-line">Start Date</label>
             <input class="in-line" type="text" class="form-control" name="startdate" placeholder="">

             <label class="in-line">End Date</label>
             <input class="in-line" type="text" class="form-control" name="enddate" placeholder="">
           </div> 
          <p>(JSS2 & SS1 only)</p>
           <div class="form-group">
            <label >Secondary School Attended </label>
             <input type="text" class="form-control" name="secondary" placeholder="">
           </div>

           <div class="form-group" >
            <label class="in-line">Start Date</label>
             <input class="in-line" type="text" class="form-control" name="startdatesecondary" placeholder="">

             <label class="in-line">End Date</label>
             <input class="in-line" type="text" class="form-control" name="enddatesecondary" placeholder="">
           </div>
         </div>
        
        </div>
       </div>

       <div align="center">
         <button type="button" class="btn btn-default btn-lg"> Previous</button>
         <button type="button" class="btn btn-info btn-lg"> Next </button>
       
       </div>
     
     </div>
   </div>
 
</form>

</div>
