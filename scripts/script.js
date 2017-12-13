var myLayout;
	function doOnLoad() {
		function startTime() {
		 var today=new Date();
		 var h=today.getHours();
		 var m=today.getMinutes();
		 var s=today.getSeconds();
		 m = checkTime(m);
		 s = checkTime(s);
		 document.getElementById('txt').innerHTML = h+":"+m+":"+s;
		 var t = setTimeout(function(){startTime()},500);
		}
		function checkTime(i) {
		 if (i<10) {i = "0" + i}; // добавим ноль впереди для чисел < 10
		 return i;
		}
		startTime();

		var myTreeView = new dhtmlXTreeView({
			checkboxes: true,
			parent:"treeviewObj",
		    items: [
		        {id: 1, text: "Бренды", items: [
		            {id: 2, text: "Blancpain"},
		            {id: 3, text: "Breguet"},
		            {id: 4, text: "IWC"},
		            {id: 5, text: "Hublot"},
		            {id: 6, text: "Omega"}
		        ]},
		        {id: 7, text: "Модель", items: [
		            {id: 8, text: "Мужская"},
		            {id: 9, text: "Женская"},
		        ]},
		        {id: 10, text: "Механизм", items: [
		            {id: 11, text: "Кварцевый"},
		            {id: 12, text: "Механика"},
		        ]},
		        {id: 13, text: "Ремешок", items: [
		            {id: 14, text: "Браслет"},
		            {id: 15, text: "Каучуковый"},
		            {id: 15, text: "Кожаный"}
		        ]}
		    ]
		});
		 myTreeView.hideCheckbox("1");
		 myTreeView.hideCheckbox("7");
		 myTreeView.hideCheckbox("10");
		 myTreeView.hideCheckbox("13");
		 myTreeView.setItemIcons("1", {
		    folder_opened:  "icon_opened",  // css for the opened folder
		    folder_closed:  "icon_closed"   // css for theclosed folder
		});
		  myTreeView.setItemIcons("7", {
		    folder_opened:  "icon_opened",  // css for the opened folder
		    folder_closed:  "icon_closed"   // css for theclosed folder
		});
		   myTreeView.setItemIcons("10", {
		    folder_opened:  "icon_opened",  // css for the opened folder
		    folder_closed:  "icon_closed"   // css for theclosed folder
		});
		    myTreeView.setItemIcons("13", {
		    folder_opened:  "icon_opened",  // css for the opened folder
		    folder_closed:  "icon_closed"   // css for theclosed folder
		});
		  myTreeView.setItemIcons("2", {
		    file:           "icon_file",    // css for the file
		});
		 myTreeView.setItemIcons("3", {
		    file:           "icon_file",    // css for the file
		});
		 myTreeView.setItemIcons("4", {
		    file:           "icon_file",    // css for the file
		});
		 myTreeView.setItemIcons("5", {
		    file:           "icon_file",    // css for the file
		});
		 myTreeView.setItemIcons("6", {
		    file:           "icon_file",    // css for the file
		});
		 myTreeView.setItemIcons("8", {
		    file:           "icon_file",    // css for the file
		});
		 myTreeView.setItemIcons("9", {
		    file:           "icon_file",    // css for the file
		});
		 myTreeView.setItemIcons("11", {
		    file:           "icon_file",    // css for the file
		});
		 myTreeView.setItemIcons("12", {
		    file:           "icon_file",    // css for the file
		});
		 myTreeView.setItemIcons("14", {
		    file:           "icon_file",    // css for the file
		});
		 myTreeView.setItemIcons("15", {
		    file:           "icon_file",    // css for the file
		});
		 myTreeView.setItemIcons("16", {
		    file:           "icon_file",    // css for the file
		});
	}