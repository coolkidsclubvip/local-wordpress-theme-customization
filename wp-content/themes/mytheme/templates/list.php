<?php
// 2 ways to render titles
    // echo "<h2>". get_the_title()."</h2>";

    echo '<div class="list col-lg-5 col-md-12 mt-5 mb-5 p-5 mx-5 ">

                <h2><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
    the_excerpt();
    echo '<div class="date-line">
                    <span>' . get_the_date('d-m-y') . '，作者：' . get_the_author() . '</span>
                    <a href="' . get_permalink() . '" class="btn btn-primary mt-3">查看详情</a>
                </div>

        </div>';

?>