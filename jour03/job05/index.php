<?php
$consonnecomp = 0;
$voyellecomp = 0;
    $str = 'On n est pas le meilleur quand on le croit mais quand on le sait.';

    $dic=[
        'voyelle' => ["a","e","i","o","y","u"],
        'consonne' => ["b", "d", "g", "v", "z","p", "t", "k", "f", "s", "m", "n"]
    ];

    for($i = 0; isset($str[$i]); $i++) {
        foreach($dic['voyelle'] as $value) {
            if ( $value == $str[$i] ) { 
                $voyellecomp++; 
            }
        } 

        foreach($dic['consonne'] as $value) {
            if ( $value == $str[$i] ) { 
                $consonnecomp++; 
            }
        } 
    }

?>




<table>
    <thead>
        <tr>
            <th>Voyelle</th>
            <th>Consonne<th/>
        </tr>

    </thead>
    <tbody>
        <tr>
            <td><?php echo $voyellecomp; ?></td>
            <td><?php echo $consonnecomp; ?></td>
        </tr>
    </tbody>
</table>