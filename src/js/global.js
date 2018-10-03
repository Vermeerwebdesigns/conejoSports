$(document).ready(function() {
	$(".child-comments").hide();

	$("a#children").click(function() {
		var section = $(this).attr("name");
		//var togTxt = $("#tog_text").text();
		$("#C-" + section).toggle();
	});
//class= form-submit @index.php input class 316, buttom
	$(".form-submit").click(function() {
		var commentBox = $("#comment"); // id = comment index.php 314
		var commentCheck = commentBox.val();
		if(commentCheck == '' || commentCheck == NULL) {
			commentBox.addClass("form-text-error");
			return false;
		}
	});
//  where is class form-reply?
	$(".form-reply").click(function() {
		var replyBox = $("#new-reply"); //where is id new-reply?
		var replyCheck = replyBox.val();
		if(replyCheck == '' || replyCheck == NULL) {
			replyBox.addClass("form-text-error");
			return false;
		}
	});

	$("a#reply").one("click", function() {
		var comCode = $(this).attr("name"); // parent code to identified to
		var parent = $(this).parent();
                                                      //       class form -tex  id  new-reply  id = form-reply
		parent.append("<br /><form action='' method='post'><textarea class='form-text' name='new-reply' id='new-reply' required='required'></textarea><input type='hidden' name='code' value='"+comCode+"' /><input type='submit' class='form-submit' id='form-reply' name='new_reply' value='Reply' /></form>")
	});

})
