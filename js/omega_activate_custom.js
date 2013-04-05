/*File contains custom javascript for omega 50can theme*/

/*Function to set challenge software cookie*/
function softwareSwitch(tid){
    jQuery.cookie("am_challenge_software", tid, { expires : 30, path: '/'});
    location.reload();
}

/*Function to page through challenge instruction steps*/
function challengeInstructionStepChange(sel) {
	window.location = window.location.protocol+'//'+window.location.host+window.location.pathname+'?page='+sel.value;
}