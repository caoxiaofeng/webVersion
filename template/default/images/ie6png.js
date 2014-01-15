//if (!window.XMLHttpRequest){
//	window.attachEvent("onload", correctPNG);
//}
//
//function correctPNG() // correctly handle PNG transparency in Win IE 5.5 & 6.
//{
//	{
//		for ( var j = 0; j < document.images.length; j++) {
//			var img = document.images[j];
//			var imgName = img.src.toUpperCase();
//			if (imgName.substring(imgName.length - 3, imgName.length) == "PNG") {
//				var imgID = (img.id) ? "id='" + img.id + "' " : "";
//				var imgClass = (img.className) ? "class='" + img.className
//						+ "' " : "";
//				var imgTitle = (img.title) ? "title='" + img.title + "' "
//						: "title='" + img.alt + "' ";
//				var imgStyle = "background:none;display:inline-block;" + img.style.cssText;
//				if (img.align == "left")
//					imgStyle = "float:left;" + imgStyle;
//				if (img.align == "right")
//					imgStyle = "float:right;" + imgStyle;
//				if (img.parentElement.href)
//					imgStyle = "cursor:hand;" + imgStyle;
//				var strNewHTML = "<p "
//						+ imgID
//						+ imgClass
//						+ imgTitle
//						+ " style=\""
//						+ "background:"
//						+ "none;"
//						+ "width:"
//						+ img.width
//						+ "px; height:"
//						+ img.height
//						+ "px;"
//						+ imgStyle
//						+ ";"
//						+ "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
//						+ "(src=\'" + img.src
//						+ "\', sizingMethod='scale');\"></p>";
//				img.outerHTML = strNewHTML;
//				j = j - 1;
//			}
//		}
//	}
//}


//if (!window.XMLHttpRequest) {
//	window.attachEvent("onload", enableAlphaImages);
//}
//
//function enableAlphaImages() {
//	for ( var i = 0; i < document.all.length; i++) {
//		var obj = document.all[i];
//		var bg = obj.currentStyle.backgroundImage;
//		var img = document.images[i];
//		if (bg && bg.match(/\.png/i) != null) {
//			var img = bg.substring(5, bg.length - 2);
//			var offset = obj.style["background-position"];
//			obj.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"
//					+ img + "', sizingMethod='crop')";
//			obj.style.background = "none";
//		} else if (img && img.src.match(/\.png$/i) != null) {
//			var src = img.src;
//			img.style.width = img.width + "px";
//			img.style.height = img.height + "px";
//			img.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"
//					+ src + "', sizingMethod='crop')"
//			img.src = "http://s1.95171.cn/b/img/pixel.gif";// 鏇挎崲閫忔槑PNG鐨勫浘鐗�
//		}
//	}
//}
