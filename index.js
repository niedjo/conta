// on predefinie nos fonctions






function moyenne(tab) {
	som = 0
	for (var i = 0; i<tab.length; i++) {
		som = som + parseFloat(tab[i])
	}
	moy = som/tab.length
	return moy
}
//  pour la moyenne de x2

function moyenne2(tab2) {
	som = 0
	taille = (tab2.length)/2
	for (i = taille;i<tab2.length;i++) {
		som = som + tab2[i]

	}
	moy = som/taille
	return moy
}

// pour la moyenne de x1 barre

function moyenne3(tab3) {
	som = 0
	taille = (tab3.length)/2
	for (var i = 0; i<taille; i++) {
		som = som + tab3[i]
	}
	moy = som/taille
	return moy}
// pour la somme simple

function somme(tab2, tab3) {
	somme = 0
	for (var i = 0; i<tab2.length; i++) {
		somme = somme + tab2[i]*tab3[i]
	}
	return somme
}
// pour la varience

function somme2(X,_x) {
	somme = 0
	for (var i = 0; i< X.length; i++) {
		somme = somme + Math.pow((X[i]-_x),2)
	}
	return somme
}

// pour la covarience

function covarience(X,Y,_x,_y) {
	function somme(tab2, tab3) {
	somme = 0
	for (var i = 0; i<tab2.length; i++) {
		somme = somme + tab2[i]*tab3[i]
	}
	return somme}

	cov = (somme(X,Y)/(X.length))-_x*_y
	return cov
}

// la varience

function varience(X,_x) {
	function somme2(X,_x) {
	somme = 0
	for (var i = 0; i< X.length; i++) {
		somme = somme + ((X[i]-_x)*(X[i]-_x))
	}
	return somme
}
	v = somme2(X,_x)/(X.length)
	return v
}
function fd() {
	const chiefs = document.querySelectorAll("#chief")
	const deps = document.querySelectorAll("#dep")
	const annee = document.querySelectorAll('#years')
	liste_chief = []
	liste_dep = []
	liste_annee = []
	for (var i=0;i<chiefs.length;i++) {
		liste_chief[i] = chiefs[i].value
		liste_dep[i] = deps[i].value
		liste_annee[i] = annee[i].value
	}
	_x = moyenne(liste_dep)
	_y = moyenne(liste_chief)
    _z = moyenne(liste_annee)
	_x1 = moyenne3(liste_dep)
	_y1 = moyenne3(liste_chief)
    _z1 = moyenne3(liste_annee)
	_x2 = moyenne2(liste_dep)
	_y2 = moyenne2(liste_chief)
    _z2 = moyenne2(liste_annee)

	//  on sait que y=a*x+b
	let fi = document.getElementById("fi")
	fi.setAttribute("style","display:;")
	// let f2i = document.getElementById("f2i")
	// f2i.setAttribute("style","display:;")	
	a = (_y2 - _y1)/(_x2 - _x1)
	b = _y1 - a*_x1
	c = document.f1.depfinal.value
    j = (_z2 - _z1)/(_x2 - _x1)
    k = _z2 - j*_x1
	// s = document.f1.chieffinal.value
	// alert(a)
	// alert(c)
	
	 u = (covarience(liste_dep,liste_chief,_x ,_y)/varience(liste_dep,_x))
	 v = (covarience(liste_dep,liste_annee,_x ,_z)/varience(liste_annee,_z))
	//  alert(covarience(liste_dep,liste_chief,_x ,_y))
	//  alert(u)
    let chief_affaire = parseFloat(u*c) + parseFloat(_y-u*_x)
	let lan = parseFloat(v*c) + parseFloat(_z-v*_x)
    console.log(chief_affaire)

  	document.f1.final.value = chief_affaire + '  FCFA' 
	document.f1.finale.value = lan



}
function fc() {
	const chiefs = document.querySelectorAll("#chief")
	const deps = document.querySelectorAll("#dep")
	const annee = document.querySelectorAll('#years')
	liste_chief = []
	liste_dep = []
	liste_annee = []
	for (var i=0;i<chiefs.length;i++) {
		liste_chief[i] = chiefs[i].value
		liste_dep[i] = deps[i].value
		liste_annee[i] = annee[i].value
	}
	_x = moyenne(liste_dep)
	_y = moyenne(liste_chief)
    _z = moyenne(liste_annee)
	_x1 = moyenne3(liste_dep)
	_y1 = moyenne3(liste_chief)
    _z1 = moyenne3(liste_annee)
	_x2 = moyenne2(liste_dep)
	_y2 = moyenne2(liste_chief)
    _z2 = moyenne2(liste_annee)

	//  on sait que y=a*x+b
	// let fi = document.getElementById("fi")
	// fi.setAttribute("style","display:;")
	let f2i = document.getElementById("fii")
	f2i.setAttribute("style","display:;")	
	a = (_y2 - _y1)/(_x2 - _x1)
	b = _y1 - a*_x1
    c = document.f1.chieffinal.value
    j = (_z2 - _z1)/(_x2 - _x1)
    k = _z2 - j*_x1
	// c = document.f1.depfinal.value
	
	// alert(a)
	// alert(c)
	
	 u = (covarience(liste_dep,liste_chief,_x ,_y)/varience(liste_chief,_y))
	 v = (covarience(liste_dep,liste_annee,_x ,_z)/varience(liste_annee,_z))
	//  alert(covarience(liste_dep,liste_chief,_x ,_y))
	//  alert(u)
    let depenses = parseFloat(u*c) + parseFloat(_x-u*_y)
	let lan = parseFloat(v*depenses) + parseFloat(_z-v*_x)
    console.log(depenses)

  	document.f1.cfinal.value = lan
	document.f1.cfinale.value = depenses + '  FCFA'



}












function d() {
    document.f1.n.value = "depenses et chiffre d'affaire"
}

function nn(){
	var cochon = document.getElementById("depfinal")
	cochon.setAttribute("style", "display:none;")
}
nn()
function f0() {
	let fi = document.getElementById("fi")
	let f2i = document.getElementById("fii")
    f2i.setAttribute("style","display:none;")
	fi.setAttribute("style","display:none;")
		

	
	var cochon2 = document.getElementById("chieffinal")
	cochon2.setAttribute("style", "display:none;")
}
f0()
function g() {
	var cochon = document.getElementById("depfinal")
	cochon.setAttribute("style", "display:;")
	var cochon2 = document.getElementById("chieffinal")
	cochon2.setAttribute("style", "display:none;")
	let f2i = document.getElementById("fii")
	f2i.setAttribute("style","display:none;")
}
function g2() {
	var cochon2 = document.getElementById("chieffinal")
	cochon2.setAttribute("style", "display:;")
	let f2i = document.getElementById("fi")
	f2i.style.display = 'none'
	var cochon = document.getElementById("depfinal")
	cochon.style.display = 'none'
}


// cochon.style.color = 'black'