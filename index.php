<?php

    $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
    $time = ['08:30 – 10:00', '10:05 – 11:35', '11:40 – 01:10', '01:30 – 03:00', '03:00 – 04:30', '04:30 – 06:00'];
    $coursesList = ['CS106-ITP-A-SMJ[LH-6]', 'MT114-CalII-MI[LH-2]', 'CS385-DBMS-SS[LH-1]', 'CS253-SRE-AHC[LH-8]', 'CS351-CA-MYK[LH-1]', 'EE101-EC-TA[LH-5]', 'SS211-ENGIII-KA[LH-1]'];


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta name="author" content="Darko Bunic"/>
		<meta name="description" content="Drag and drop table content/rows with JavaScript"/>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen"/>

		<title>Example 18: Simple element animation (row)</title>
	</head>
	<body>
			<!-- drag region -->

			<div id="redips-drag" class="centeredDiv">

				<table id="table" class="timetable">
					<colgroup>

                        <?php for($i = 0; $i < sizeof($time); $i++) {?>
                            <col width="80"/>
                        <?php } ?>

                    </colgroup>
					<thead>
					<tr>
						<th class="time">Day &amp; Time</th>
                        <?php for($i = 0; $i < sizeof($time); $i++) {?>
                            <th class="time"><?php echo $time[$i] ?></th>
                        <?php } ?>
                    </tr>
					</thead>
					<tbody>
                    <?php for($i = 0; $i < sizeof($days); $i++) {?>
                        <tr>
                            <td class="day"><?php echo $days[$i] ?></td>
                            <td>
                                <?php for($j = 0; $j < rand(1, 4); $j++) {?>
                                    <div class="redips-drag"><?php echo $coursesList[rand(0, 3)]; ?></div>
                                <?php } ?>
                            </td>
                            <td>
                                <?php for($j = 0; $j < rand(1, 4); $j++) {?>
                                    <div class="redips-drag"><?php echo $coursesList[rand(0, 3)]; ?></div>
                                <?php } ?>
                            </td>
                            <td>
                                <?php for($j = 0; $j < rand(1, 4); $j++) {?>
                                    <div class="redips-drag"><?php echo $coursesList[rand(0, 3)]; ?></div>
                                <?php } ?>
                            </td>
                            <td>
                                <?php for($j = 0; $j < rand(1, 4); $j++) {?>
                                    <div class="redips-drag <?php echo ($j>2)? 'red' : 'orange'; ?>"><?php echo $coursesList[rand(0, 3)]; ?></div>
                                <?php } ?>
                            </td>
                            <td>
                                <?php for($j = 0; $j < rand(1, 4); $j++) {?>
                                    <div class="redips-drag"><?php echo $coursesList[rand(0, 3)]; ?></div>
                                <?php } ?>
                            </td>
                            <td>
                                <?php for($j = 0; $j < rand(1, 4); $j++) {?>
                                    <div class="redips-drag red"><?php echo $coursesList[rand(0, 3)]; ?></div>
                                <?php } ?>
                            </td>
                        </tr>

                    <?php } ?>
					</tbody>
				</table>
			</div>


	<!-- Js -->

			<script type="text/javascript" src="header.js"></script>
			<script type="text/javascript" src="jquery-3.2.1.slim.min.js"></script>
			<script type="text/javascript" src="redips-drag-source.js"></script>
			<script type="text/javascript" src="script.js"></script>
			<script type="text/javascript" src="myscript.js"></script>
	</body>
</html>
