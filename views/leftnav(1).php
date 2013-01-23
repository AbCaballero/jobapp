<?php

  function getleftnav() {

    $pageurl = $_GET['q'];
    $urloffset = substr($pageurl, (strrpos($pageurl, '/') + 1));

    //defaulting all menu items to be non-active
    $lieducation = '<li><a href="education">Education</a></li>';
    $liidentity = '<li><a href="identity">Personal Information</a></li>';
    $liinternship = '<li><a href="internship">Internship</a></li>';
    $liresidency = '<li><a href="residency">Residency</a></li>';
    $liaffiliations = '<li><a href="affiliations">Affiliations</a></li>';
    $licertifications = '<li><a href="certifications">Certifications</a></li>';
    $liexams = '<li><a href="exams">Exams</a></li>';
    $lilicensure = '<li><a href="licensure">Licenses</a></li>';
    $lidisciplinary = '<li><a href="disciplinary">Disciplinary  Actions</a></li>';
    $lireferences = '<li><a href="references">References</a></li>';
    $liupload = '<li><a href="upload">Uploaded CV <span class="light">(optional)</span></a></li>';
    $lirelease = '<li><a href="release">Release &amp; Authorization</a></li>';

    switch($urloffset) {
      case 'education':
        $lieducation = '<li class="active"><a href="education">Education</a></li>';
        break;
      case 'identity':
        $liidentity = '<li class="active"><a href="identity">Personal Information</a></li>';
        break;
      case 'internship':
        $liinternship = '<li class="active"><a href="internship">Internship</a></li>';
        break;
      case 'residency':
        $liresidency = '<li class="active"><a href="residency">Residency</a></li>';
        break;
      case 'affiliations':
        $liaffiliations = '<li class="active"><a href="affiliations">Affiliations</a></li>';
        break;
      case 'certifications':
        $licertifications = '<li class="active"><a href="certifications">Certifications</a></li>';
        break;
      case 'exams':
        $liexams = '<li class="active"><a href="exams">Exams</a></li>';
        break;
      case 'licensure':
        $lilicensure = '<li class="active"><a href="licensure">Licenses</a></li>';
        break;
      case 'disciplinary':
        $lidisciplinary = '<li class="active"><a href="disciplinary">Disciplinary  Actions</a></li>';
        break;
      case 'references':
        $lireferences = '<li class="active"><a href="references">References</a></li>';
        break;
      case 'upload':
        $liupload = '<li class="active"><a href="upload">Uploaded CV <span class="light">(optional)</span></a></li>';
        break;
      case 'release':
        $lirelease = '<li class="active"><a href="release">Release &amp; Authorization</a></li>';
        break;
    }

    $pageleftnav = '<div id="leftNav">
  <h1>Physician<br />Application Step 1</h1>
  <ul class="menu">' . $liidentity . $lieducation . $liinternship . $liresidency . $liaffiliations . $licertifications . $liexams . $lilicensure . $lidisciplinary . $lireferences . $liupload . $lirelease . '<li class="hr"></li>
    <li><a href="submit">SUBMIT</a></li>
  </ul>
</div>';

    return $pageleftnav;

  }
?>
