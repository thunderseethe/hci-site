function element(tag){
	return element(tag, {}, []);
}

function element(tag, attrs){
	return element(tag, attrs, []);
}

function element(tag, attrs, children){
	var ele = document.createElement(tag);
	for(key in attrs){
		ele.setAttribute(key, attrs[key]);
	}
	for(key in children){
		ele.appendChild(children[key]);
	}
	return ele;
}

function text(msg){
	return document.createTextNode(msg);
}

function svg(tag){
	return svg(tag, {}, []);
}
function svg(tag, attrs){
	return svg(tag, attrs, []);
}
function svg(tag, attrs, children){
	var ele = document.createElementNS("http://www.w3.org/2000/svg", tag);
	for(key in attrs){
		ele.setAttribute(key, attrs[key]);
	}
	for(key in children){
		ele.appendChild(children[key]);
	}
	return ele;
}