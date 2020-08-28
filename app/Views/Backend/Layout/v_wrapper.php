<?php
if(session()->get('user_name')!=null)
{
    echo view('Backend/Layout/v_head');
    echo view('Backend/Layout/v_header.php');
    echo view('Backend/Layout/v_nav.php');
    echo view('Backend/Layout/v_header_content.php');
    echo view('Backend/Layout/v_content.php');
    echo view('Backend/Layout/v_footer.php');

}
?>