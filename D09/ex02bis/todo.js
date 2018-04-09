$(document).ready(function()
{
	var cookie_tab = [];
	var cook;
	var i = 0;

	$("#button").click(ft_new);
	$(".toDoItem").click(ft_delete);

	if ($.cookie)
	{
		cook = $.cookie.substr(7);
		cookie_tab = JSON.parse(cook);
		i = 0;
		while (i < cookie_tab.length)
		{
			$("#ft_list").innerHTML += "<div class=\"toDoItem\" onclick=\"return ft_delete(this)\"><p>" + cookie_tab[i] + "<\/p><\/div>";
			i++;
		}
	}
});

function update_cookie()
{
	var cook;
	var cookie_tab = [];
	var i = 0;
	var len = $("#ft_list").children().length;
	i = 0;

	while (i < len)
	{
		cookie_tab.push($("#ft_list").children([i]).innerHTML);
		i++;
	}
	cook = JSON.stringify(cookie_tab);
	return(cook);
}

function ft_new()
{
	var cook;
	var answer = prompt("Enter your new to do item.");
	var existing = $("#ft_list").innerHTML;
	$("#ft_list").innerHTML = "<div class=\"toDoItem\"><p>" + answer + "<\/p><\/div>" + existing;

	cook = update_cookie();
	$.cookie = "cookie=" + cook;
}

ft_delete()
{
	var answer = confirm("Are you sure you want to delete it?");
	if (answer == 1)
	{
		this.outerHTML = "";
		cook = update_cookie();
		document.cookie = "cookie="+ cook;
	}
}


