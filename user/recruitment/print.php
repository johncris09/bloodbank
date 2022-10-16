<?php
 include 'session.php';
 ?>
 <html>
    <head>
        <title>Blood Donor History Questionnaire</title>
        <style type="text/css">
            .header{
                text-align: center;
            }
            table {
                border-collapse: collapse;
                font-size: 14px
            }
        </style>
    </head>
    <body>
        <div class="header">
            <h5>Department of Health <br>
            NATIONAL VOLUNTARY BLOOD SERVICES PROGRAM<br>
            Provincial Health Office<br>
            Province of Misamis Occidental</h5>

            <h3>BLOOD DONOR HISTORY QUESTIONNAIRE</h3>
        </div>
<?php   
    include('../../includes/dbcon.php'); 
    $id=$_REQUEST['id'];

    $query1=mysqli_query($con,"select * from donation LEFT JOIN donor ON donor.donor_id = donation.donor_id LEFT JOIN program ON program.program_id = donation.program_id where donation.donation_id='$id'")or die(mysqli_error($con));
            $row1=mysqli_fetch_array($query1);
                $donor_id=$row1['donor_id'];
?>          
        <table width="100%">
            <tr>
                <td colspan="2">DATE :  <?php echo date("M d, Y",strtotime($row1['donation_date']));?></td>
                <td colspan="6"> VENUE: </td>
            </tr>
            <tr>
                <td colspan="8">PERSONAL DATA </td>
            </tr>
            <tr>
                <td>Name : <div style="text-align: center"><?php echo $row1['donor_last'];?></div>
                    <div style="text-align: center">(Surname)</div>
                </td>
                <td>
                    <div style="text-align: center"><?php echo $row1['donor_first'];?></div>
                    <div style="text-align: center">(First Name)</div>
                </td>
                <td>
                    <div style="text-align: center"><?php echo $row1['donor_middle'];?></div>
                    <div style="text-align: center">(MI)</div>
                </td>
            </tr>
            <tr>
                <td>Date of Birth : </td>
                <td><?php echo date("M d, Y",strtotime($row1['donor_bday']));?>
                    <br>
                    mm dd yyy
                </td>
                <td>Age : <?php 
                            $age = date_create($row1['donor_bday'])->diff(date_create('today'))->y;
                               echo $age;
                            ?>  </td>
                <td>Gender : </td>
                <td>( <?php if($row1['donor_gender']=="Male") echo "/";?> )M ( <?php if($row1['donor_gender']=="Female") echo "/";?> )F</td>
                <td>Civil Status : <?php echo $row1['donor_civil'];?></td>
            </tr>
            <tr>
                <td>Contact Number : </td>
                <td colspan="2"><?php echo $row1['donor_contact']." ".$row1['donor_tel'];?></td>
                <td colspan="2">Email Address: <?php echo $row1['donor_email'];?></td>
            </tr>
            <tr>
                <td>Nationality : </td>
                <td><?php echo $row1['donor_nationality'];?></td>
                <td>Occupation : </td>
                <td><?php echo $row1['donor_occupation'];?></td>
            </tr>
            <tr>
                <td>Prefered Mailing Address: </td>
            </tr>
            <tr>
                <td>Home Address : </td>
                <td><?php echo $row1['donor_address']." ".$row1['donor_city'].", ".$row1['donor_province'];?></td>
                <td>Zip Code :</td>
                <td><?php echo $row1['donor_zipcode'];?></td>
            </tr>
            <tr>
                <td>Office Address : </td>
                <td><?php echo $row1['donor_civil'];?></td>
                <td>Zip Code :</td>
                <td><?php echo $row1['donor_civil'];?></td>
            </tr>
            <tr>
                <td>TYPE OF DONOR : </td>
                <td>( <?php
                if($row1['donor_type']=="Volunteer")
                 echo "/";?> ) VOLUNTEER</td>
                <td>( <?php
                if($row1['donor_civil']<>"Volunteer")
                 echo "/";?> ) OTHERS</td>
            </tr>
            <tr>
                <td>METHOD OF COLLECTION : </td>
                <td>( <?php
                if($row1['donor_civil']=="Volunteer")
                 echo "/";?> ) WHOLE BLOOD (conventional)</td>
                <td>( ) Pheresis</td>
            </tr>
            <tr>
                <td>LAST DONATION : </td>
                <td></td>
                <td>NUMBER OF DONATIONS</td>
                <td>
                    <?php   
                        $querycount=mysqli_query($con,"select * from donation where donor_id='$donor_id'")or die(mysqli_error($con));
                            $rowcount=mysqli_num_rows($querycount);
                            echo $rowcount;
                    ?> 
                </td>
            </tr>
            <tr>
<?php   
    $query2=mysqli_query($con,"select donation_date from donation where donor_id='$donor_id' order by donation_date desc LIMIT 0,1")or die(mysqli_error($con));
        $row2=mysqli_fetch_array($query2);
?>             
                <td>Month : </td>
                <td><?php echo date("M",strtotime($row1['donation_date']));?></td>
                <td>Year : </td>
                <td><?php echo date("Y",strtotime($row1['donation_date']));?></td>
            </tr>
        </table>

        Instructions: All donors must read the donor educational materials provided by the Blood Service Facility Staff before answering.

        <table class="table">
                                <tbody>

<?php
    
    $query=mysqli_query($con,"select * from category order by category_id")or die(mysqli_error($con));
            $i=1;
            while($row=mysqli_fetch_array($query))
            {
                $cid=$row['category_id'];
            
?>  
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="2" style="text-align: left">
                                         <?php echo $row['category'];?>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         <?php if ($i==1) echo "YES";?>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_2" rowspan="1" colspan="1">
                                         <?php if ($i==1) echo "NO";?>
                                    </th>
                                </tr>

<?php
        $query1=mysqli_query($con,"select * from question natural join answer natural join survey where category_id='$cid' and donation_id='$id'")or die(mysqli_error($con));
        
            while($row1=mysqli_fetch_array($query1))
            {

            
?>
                                <tr role="row" class="even" style="border: 1px solid #000;">
                                    <td class="sorting_1"  style="border: 1px solid #000;">
                                         <?php echo $i;?>
                                    </td>
                                    <td  style="border: 1px solid #000;">
                                         <?php echo $row1['question'];?>
                                    </td>
                                    <td  style="border: 1px solid #000;text-align: center;font-weight: bolder;">
                                         <?php if ($row1['answer']=='yes') echo "/";?>
                                    </td>
                                    <td  style="border: 1px solid #000;text-align: center;font-weight: bolder;">
                                         <?php if ($row1['answer']=='no') echo "/";?>
                                    </td>
                                </tr>                                   
<?php $i++;}}?>
                                
                                
                                </tbody>
                                <tr>
                                    <td colspan="5"><br>DONOR'S SIGNATURE ______________________________________</td>
                                </tr>
                                </table>
                                <br><br><br>
            <table width="100%">
            <tr>
                <td colspan="8">PHYSICAL EXAMINATION </td>
            </tr>
            <tr>
                <td colspan="8"><h3>FOR BLOOD BANK USE ONLY</h3></td>
            </tr>
            <tr>
                <td>PHYSICAL EXAMINATION : </td>
            </tr>
<?php   

    $querype=mysqli_query($con,"select * from physical_exam LEFT JOIN user ON user.user_id = physical_exam.user_id where physical_exam.donation_id='$id'")or die(mysqli_error($con));
            $rowpe=mysqli_fetch_array($querype);
?>            
            <tr>
                <td></td>
                <td>Body Weight : </td>
                <td><?php echo $rowpe['weight'];?> kg</td>
                <td>Blood Pressure : </td>
                <td><?php echo $rowpe['blood_pressure'];?> </td>
                <td>Pulse Rate : </td>
                <td><?php echo $rowpe['pulse_rate'];?> </td>
                <td>Temp: </td>
                <td><?php echo $rowpe['temp'];?> &deg</td>
            </tr>
            <tr>
                <td>General Appearance : </td>
                <td colspan="3"><?php echo $rowpe['gen_appearance'];?> </td>
                <td>Skin : </td>
                <td><?php echo $rowpe['skin'];?> </td>
            </tr>
            <tr>
                <td>HEENT : </td>
                <td colspan="3"><?php echo $rowpe['heent'];?> </td>
                <td>Heart & Lungs : </td>
                <td><?php echo $rowpe['heart_lungs'];?> </td>
            </tr>
            <tr>
                <td>REMARKS : </td>
            </tr>
            <tr>
                <td>
                    ( <?php if ($rowpe['remarks']=="Accepted") echo "/";?> ) Accepted <br>
                    ( <?php if ($rowpe['remarks']=="Temporarily Deferred") echo "/";?>) Temporarily Deferred <br>
                    ( <?php if ($rowpe['remarks']=="Permamnently Deferred") echo "/";?> ) Permamnently Deferred
                </td>
                <td>Volume : <?php echo $rowpe['volume'];?> ml</td>
                <td><u><?php echo $rowpe['user_first']." ".$rowpe['user_middle']." ".$rowpe['user_last'];?></u>
                    Medical Officer</td>
            </tr>
            <tr>
                <td>REASON/S FOR DEFERRAL: <?php echo $rowpe['reasons_for_deferral'];?></td>
            </tr>
            <tr>
                <td>______________________________________________</td>
            </tr>
            <tr>
                <td>Place Barcode Sticker of Donation ID No. </td>
                <td>Blood Bank Officer</td>
            </tr>
            <tr>
                <td>For Phlebotomist use only : </td>
            </tr>
<?php   

    $querybe=mysqli_query($con,"select * from blood_exam LEFT JOIN user ON user.user_id = blood_exam.user_id where blood_exam.donation_id='$id'")or die(mysqli_error($con));
            $rowbe=mysqli_fetch_array($querybe);
?>              
            <tr>
                <td>Blood Bag : </td>
                <td> ( <?php if ($rowbe['blood_bag_type']=="Single") echo "/";?> ) Single </td>
                <td>( <?php if ($rowbe['blood_bag_type']=="Double") echo "/";?> ) Double </td>
                <td>( <?php if ($rowbe['blood_bag_type']=="Triple") echo "/";?> ) Triple </td>
            </tr>
            <tr>
                <td>Segment Number : </td>
                <td><?php echo $rowbe['segment_number'];?></td>
            </tr>
            <tr>
                <td>Time Started: </td>
                <td><?php echo $rowbe['time_started'];?></td>
            </tr>
            <tr>
                <td>Time Ended: </td>
                <td><?php echo $rowbe['time_ended'];?></td>
            </tr>
            <tr>
                <td>Phlebotomist: </td>
                <td><?php echo $rowbe['user_first']." ".$rowbe['user_middle']." ".$rowbe['user_last'];?></td>
            </tr>
        </table>

        <h3>DONOR'S INFORMED CONSENT: </h3>

        <p>"I certify that I am the person referred to in all the entries, which were read and well understood by me. It is my free and voluntary act to donate my blood, aware of its risks during and after extraction. The same have been explained to me in understandable language and dialect that I speak."</p>
        <p>"I am voluntarily giving my blood through PHO-Negros First Provincial Blood Center. I understand that my blood will be tested for Blood Type, Hemoglobin, Malaria, Syphilis, Hepatitis B, Hepatitis C, and HIV and NO official result will be released to me. If found reactive, I agree to have my blood submitted to National Reference laboratory for confirmatory testing. When confirmed to have the disease, I agree to be referred to the appropriate facility for counseling and further management."</p>
        <p>"I certify that I have to the best of my knowledge, truthfully answered the above questions."</p>

        <div style="text-align: right">____________________________</div>
        <div style="text-align: right">DONOR'S SIGNATURE</div>
        <h3>Post - Donation Instructions: </h3>

        <ul>
            <li>No Smoking for more than one hour <br>
            (Indi ma nigarilyo sa sulod sang masobra isa ka oras)
            </li>
            <li>
                Drinking more than the usual amount of fluids (> 8-10 glasses per day) <br>
                (Ma inom sang masobra 8 asta 10 ka baso sang tubig)
            </li>
            <li>
                Avoid lifting heavy objects or strenuous activities for 24 hours <br>
                (Likawan mamug-at sa sulod sang 24 oras)
            </li>
            <li>
                Leave the dressing /  bandage on for a minimum of 4 hours <br>
                (Indi pagkakason kag pabay-an ang plaster o bandage sa pilas sa indi manubo sa 4 ka oras)
            </li>
            <li>
                Apply pressure for 2-5 minutes on the venipuncture site <br>
                (Tum-okon ang pilas sa sulod sang 2-5 ka minuto)
            </li>
            <li>
                If you experience bruising on your arm, at the donation site, apply ice pack to the area for 15-20 minutes, 3-4 times a day on the first day; on the second day, apply warm moist cloth 15-20 minutes, 3-4 times a day<br>
                (Kung nagabanog ukon may lagob, butangan ice pack ang pilas sa una nga adlaw, butangan warm pack sa masunod nga adlaw)

            </li>
            <li>
                If you feel dizzy or light headed, lie down with feet elevated <br>
                (Maghigda nga ang tiil ginapasaka kung galingin ang inyo ulo)
            </li>
        </ul>
        <?php   
            $queryb=mysqli_query($con,"select * from user where user_id='$id'")or die(mysqli_error($con));
            $rowb=mysqli_fetch_array($queryb);
        ?> 

        <div style="margin-left:1200px;">PRINTED BY: <u>&nbsp<?php echo $rowb['user_first']." ".$rowb['user_middle']." ".$rowb['user_last'];?></u></div>    
    </body>
</html>
