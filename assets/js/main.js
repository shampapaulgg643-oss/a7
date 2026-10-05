(function(){
  var b=document.querySelector('.burger'),n=document.getElementById('nav');
  if(b&&n)b.addEventListener('click',function(){var o=n.classList.toggle('open');b.setAttribute('aria-expanded',o?'true':'false');});
  // Weather-to-jacket picker
  var REC={
    rain:{t:'Waterproof rain shell',d:'A fully seam-taped shell with a waterproof-breathable membrane and an adjustable hood.',l:['Look for a hydrostatic head of 10,000 mm or more for steady rain','Pit zips or a mesh lining help vent sweat','Layer a light fleece underneath if it is also cool']},
    wind:{t:'Windproof field jacket',d:'A tightly woven cotton, waxed cotton or nylon jacket that blocks gusts without trapping heat.',l:['A high collar and storm flap over the zip keep wind out','Adjustable cuffs and a drawcord hem seal gaps','Add a thin wool layer on exposed ridges']},
    cold:{t:'Insulated jacket over layers',d:'A down or synthetic insulated jacket worn over a base layer and fleece.',l:['Synthetic insulation stays warmer when damp than down','Choose a hood and a hem that covers your lower back','Keep a shell handy if snow or sleet is forecast']},
    mild:{t:'Light chore or denim jacket',d:'An unlined cotton jacket for cool mornings and breezy afternoons.',l:['Roomy enough to wear over a sweater later in the day','Large chest and hip pockets earn their keep','Easy to carry or tie around the waist when it warms up']}
  };
  var out=document.getElementById('rec');
  document.querySelectorAll('.cond').forEach(function(c){c.addEventListener('click',function(){
    document.querySelectorAll('.cond').forEach(function(x){x.setAttribute('aria-pressed','false');});
    c.setAttribute('aria-pressed','true');var r=REC[c.dataset.w];
    out.querySelector('h3').textContent=r.t;out.querySelector('p').textContent=r.d;
    out.querySelector('ul').innerHTML=r.l.map(function(x){return '<li>'+x+'</li>';}).join('');
  });});
  // Cookie
  var k=document.getElementById('cookie'),v=null;try{v=localStorage.getItem('fcm_cookie');}catch(e){}
  if(k&&!v)k.classList.add('show');
  document.querySelectorAll('[data-cookie]').forEach(function(x){x.addEventListener('click',function(){try{localStorage.setItem('fcm_cookie',x.dataset.cookie);}catch(e){}k.classList.remove('show');});});
  var y=document.getElementById('year');if(y)y.textContent=new Date().getFullYear();
})();
