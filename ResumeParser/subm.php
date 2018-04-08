<?php 
										//fetch.php
										
										 echo $_POST['name'];
										 $ss = $_POST['resumeskills'];
										 $ss = trim($ss," ");
										 echo $ss;
										 $connect = mysqli_connect("localhost", "root", "", "evm");
										 $q = "Insert into student values('".$_POST['name']."','".$ss."')";
										 $res = mysqli_query($connect, $q);
										 
										
										   /*
                                            $i = 1;
											foreach ($resume_details as $resume_detail) {
                                                ?><tr><?php
                                                ?><td><?php echo $i;
                                                $i++;
                                                ?></td><?php
                                                ?><td><a href="<?php echo 'resumes/'.$resume_detail['filename'] ?>" target="_blank"><?php echo $resume_detail['filename'];
                                                ?></a></td><?php
                                                ?><td><?php echo $resume_detail['firstname'];
                                                ?></td><?php
                                                ?><td><?php echo $resume_detail['email'];
                                                ?></td><?php
                                                ?><td><?php echo $resume_detail['mobile'];
                                                ?></td><?php
                                                ?><td><?php echo $resume_detail['place'];
                                                ?></td><?php
                                                ?><td><?php echo $resume_detail['dob'];
                                                ?></td><?php
                                                ?><td><?php echo $resume_detail['lastLoginDate'];
                                                ?></td><?php
                                                ?></tr><?php

                                            }
										   */
                                        ?>
