<?php
// Data mata kuliah (di aplikasi nyata, ambil dari database MySQL)
$courses = [
    ['id'=>1,'kode'=>"IF301",'nama'=>"Basis Data Lanjut",'sks'=>3,'hari'=>0,'mulai'=>8,'selesai'=>10.5,'ruang'=>"Lab 2",'dosen'=>"Dr. Hadi Santoso",'kuota'=>8],
    ['id'=>2,'kode'=>"IF303",'nama'=>"Pemrograman Web",'sks'=>3,'hari'=>0,'mulai'=>10.5,'selesai'=>13,'ruang'=>"Lab 1",'dosen'=>"Sari Wulandari, M.Kom.",'kuota'=>12],
    ['id'=>3,'kode'=>"UM203",'nama'=>"Etika Profesi",'sks'=>2,'hari'=>0,'mulai'=>13,'selesai'=>15,'ruang'=>"R. 204",'dosen'=>"Prof. Budi Raharjo",'kuota'=>30],
    ['id'=>4,'kode'=>"IF305",'nama'=>"Rekayasa Perangkat Lunak",'sks'=>3,'hari'=>1,'mulai'=>8,'selesai'=>10.5,'ruang'=>"R. 301",'dosen'=>"Dr. Andini Putri",'kuota'=>5],
    ['id'=>5,'kode'=>"IF307",'nama'=>"Jaringan Komputer",'sks'=>3,'hari'=>1,'mulai'=>9,'selesai'=>11.5,'ruang'=>"Lab 3",'dosen'=>"Eko Prasetyo, M.T.",'kuota'=>10],
    ['id'=>6,'kode'=>"IF311",'nama'=>"Interaksi Manusia dan Komputer",'sks'=>2,'hari'=>2,'mulai'=>8,'selesai'=>10,'ruang'=>"R. 205",'dosen'=>"Sari Wulandari, M.Kom.",'kuota'=>15],
    ['id'=>7,'kode'=>"IF309",'nama'=>"Kecerdasan Buatan",'sks'=>3,'hari'=>2,'mulai'=>13,'selesai'=>15.5,'ruang'=>"R. 302",'dosen'=>"Dr. Hadi Santoso",'kuota'=>0],
    ['id'=>8,'kode'=>"IF313",'nama'=>"Statistika",'sks'=>3,'hari'=>3,'mulai'=>10,'selesai'=>12.5,'ruang'=>"R. 101",'dosen'=>"Dewi Lestari, M.Si.",'kuota'=>20],
    ['id'=>9,'kode'=>"UM201",'nama'=>"Kewirausahaan",'sks'=>2,'hari'=>3,'mulai'=>13,'selesai'=>15,'ruang'=>"R. 204",'dosen'=>"Prof. Budi Raharjo",'kuota'=>25],
    ['id'=>10,'kode'=>"IF315",'nama'=>"Keamanan Informasi",'sks'=>3,'hari'=>4,'mulai'=>8,'selesai'=>10.5,'ruang'=>"Lab 3",'dosen'=>"Eko Prasetyo, M.T.",'kuota'=>9],
    ['id'=>11,'kode'=>"IF317",'nama'=>"Praktikum Basis Data",'sks'=>1,'hari'=>4,'mulai'=>13,'selesai'=>14.5,'ruang'=>"Lab 2",'dosen'=>"Dr. Hadi Santoso",'kuota'=>14]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>KRS Online – Semester Ganjil 2026/2027</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600&family=Sora:wght@600;700&display=swap">
<style>
:root{--bg:#eef2f6;--sf:#fff;--ink:#14213d;--mut:#5b6678;--ln:#d6dde7;--pri:#1d3a8a;--prif:#fff;--ok:#1f8a63;--warn:#b7791f;--bad:#b4372f;--b0:#dbe7ff;--b1:#d7f2e6;--b2:#fde8c8;--b3:#f3dcf5;--b4:#fbdcdc;--bt:#14213d;
box-sizing:border-box;padding-top:env(safe-area-inset-top,0px);padding-bottom:env(safe-area-inset-bottom,0px);color-scheme:light}
@media (prefers-color-scheme:dark){:root:not([data-theme="light"]){--bg:#0e1524;--sf:#17203a;--ink:#e8edf7;--mut:#9aa6bd;--ln:#2b3656;--pri:#7da2ff;--prif:#0e1524;--ok:#4cc79a;--warn:#e3b45a;--bad:#ff8a80;--b0:#233a73;--b1:#1c5240;--b2:#6b4a17;--b3:#5a2d61;--b4:#6b2a2a;--bt:#e8edf7;color-scheme:dark}}
:root[data-theme="dark"]{--bg:#0e1524;--sf:#17203a;--ink:#e8edf7;--mut:#9aa6bd;--ln:#2b3656;--pri:#7da2ff;--prif:#0e1524;--ok:#4cc79a;--warn:#e3b45a;--bad:#ff8a80;--b0:#233a73;--b1:#1c5240;--b2:#6b4a17;--b3:#5a2d61;--b4:#6b2a2a;--bt:#e8edf7;color-scheme:dark}
html{scroll-padding-top:env(safe-area-inset-top,0px)}
*{box-sizing:border-box}
body{margin:0;background:var(--bg);color:var(--ink);font:15px/1.5 "Public Sans",system-ui,sans-serif}
h1,h2,h3{font-family:Sora,system-ui,sans-serif;margin:0;line-height:1.25}
header{background:var(--sf);border-bottom:1px solid var(--ln);padding:16px 20px;display:flex;flex-wrap:wrap;gap:12px 24px;align-items:center;justify-content:space-between}
header h1{font-size:19px}header p{margin:2px 0 0;color:var(--mut);font-size:13px}
.me{font-size:13px;text-align:right}.me b{display:block;font-size:14px}
main{display:grid;grid-template-columns:minmax(0,1fr) 400px;gap:20px;padding:20px;max-width:1240px;margin:0 auto}
@media(max-width:920px){main{grid-template-columns:1fr;padding:14px}.me{text-align:left}}
.tools{display:flex;flex-wrap:wrap;gap:10px;margin-bottom:14px}
input[type=search]{flex:1 1 220px;padding:10px 12px;border:1px solid var(--ln);border-radius:8px;background:var(--sf);color:var(--ink);font:inherit}
.chips{display:flex;gap:6px;flex-wrap:wrap}
.chip{border:1px solid var(--ln);background:var(--sf);color:var(--ink);padding:7px 12px;border-radius:99px;font:inherit;font-size:13px;cursor:pointer}
.chip[aria-pressed=true]{background:var(--pri);color:var(--prif);border-color:var(--pri)}
:focus-visible{outline:3px solid var(--pri);outline-offset:2px}
.list{display:grid;gap:10px}
.card{background:var(--sf);border:1px solid var(--ln);border-left:5px solid var(--ln);border-radius:8px;padding:12px 14px;display:grid;grid-template-columns:1fr auto;gap:4px 12px;align-items:center}
.card.k-on{border-left-color:var(--ok)}.card.k-clash,.card.k-limit{border-left-color:var(--warn)}.card.k-full{border-left-color:var(--bad)}
.card h3{font-size:15px}.meta{grid-column:1;margin:0;color:var(--mut);font-size:13px}
.ck{font-size:12px;color:var(--mut)}.ck b{color:var(--ink)}
.why{grid-column:1/-1;font-size:12.5px;color:var(--warn);margin:0}.k-full .why{color:var(--bad)}
.btn{border:0;border-radius:8px;padding:9px 16px;font:600 14px "Public Sans",system-ui,sans-serif;cursor:pointer;background:var(--pri);color:var(--prif)}
.btn.sec{background:transparent;color:var(--ink);border:1px solid var(--ln)}
.btn.rm{background:transparent;color:var(--bad);border:1px solid var(--bad)}
.btn:disabled{opacity:.45;cursor:not-allowed}
.card .btn{grid-row:1/3;grid-column:2}
.empty{background:var(--sf);border:1px dashed var(--ln);border-radius:8px;padding:28px;text-align:center;color:var(--mut)}
aside{position:sticky;top:12px;align-self:start;display:grid;gap:14px}
@media(max-width:920px){aside{position:static}}
.panel{background:var(--sf);border:1px solid var(--ln);border-radius:10px;padding:14px}
.panel h2{font-size:15px;margin-bottom:8px}
.big{font:700 28px Sora,system-ui,sans-serif}.big small{font-size:14px;color:var(--mut);font-weight:600}
.bar{height:10px;background:var(--bg);border-radius:99px;overflow:hidden;margin:8px 0 6px}
.bar i{display:block;height:100%;width:0;background:var(--warn);transition:width .35s,background .35s}
.bar.good i{background:var(--ok)}.bar.max i{background:var(--pri)}
.hint{font-size:13px;color:var(--mut);margin:0}
.banner{background:var(--b1);color:var(--bt);border-radius:8px;padding:10px 12px;font-size:13.5px;margin-bottom:10px}
.act{margin-top:12px;display:grid;gap:8px}
.ttw{overflow-x:auto}
.tth{display:grid;grid-template-columns:repeat(5,1fr);margin-left:38px;font:600 12px "Public Sans",sans-serif;color:var(--mut);text-align:center;min-width:300px}
.tt{position:relative;margin-left:38px;height:440px;min-width:300px;border-left:1px solid var(--ln);background:repeating-linear-gradient(to bottom,var(--ln) 0,var(--ln) 1px,transparent 1px,transparent 44px)}
.hr{position:absolute;left:-38px;width:34px;text-align:right;font-size:10.5px;color:var(--mut);transform:translateY(-7px)}
.blk{position:absolute;width:calc(20% - 4px);border-radius:6px;padding:3px 5px;font-size:10.5px;line-height:1.25;color:var(--bt);overflow:hidden;animation:pop .25s ease-out}
@keyframes pop{from{transform:scale(.9);opacity:0}}
@media(prefers-reduced-motion:reduce){.blk{animation:none}.bar i{transition:none}}
.blk b{display:block;font-size:11px}
.mini{margin:0;padding:0;list-style:none;font-size:13px}
.mini li{display:flex;justify-content:space-between;gap:8px;padding:4px 0;border-bottom:1px solid var(--ln)}
details summary{cursor:pointer;font:600 13px "Public Sans",sans-serif}
pre{margin:8px 0 0;font-size:12px;background:var(--bg);padding:10px;border-radius:8px;overflow:auto;white-space:pre-wrap}
#toast{position:fixed;left:50%;bottom:calc(18px + env(safe-area-inset-bottom,0px));transform:translate(-50%,20px);background:var(--ink);color:var(--bg);padding:10px 16px;border-radius:8px;font-size:14px;opacity:0;pointer-events:none;transition:.25s;max-width:90vw;z-index:30}
#toast.on{opacity:1;transform:translate(-50%,0)}
.ov{position:fixed;inset:0;background:rgba(10,15,30,.55);display:grid;place-items:center;padding:16px;z-index:20}
.dlg{background:var(--sf);border-radius:12px;padding:20px;max-width:420px;width:100%}
.dlg h2{font-size:17px;margin-bottom:6px}.dlg .row{display:flex;gap:8px;justify-content:flex-end;margin-top:16px}
</style>
</head>
<body>
<header>
  <div><h1>KRS Online</h1><p>Semester Ganjil 2026/2027 · Teknik Informatika, semester 5</p></div>
  <div class="me"><b>Rina Maharani</b>NIM 22.11.0457 · IPS 3,42 → maksimum 24 SKS</div>
</header>
<main>
  <section aria-label="Katalog mata kuliah">
    <div class="tools">
      <input type="search" id="q" placeholder="Cari mata kuliah, kode, atau dosen" aria-label="Cari mata kuliah">
      <div class="chips" id="chips"></div>
    </div>
    <div class="list" id="list" aria-live="polite"></div>
  </section>
  <aside>
    <div class="panel" id="meter"></div>
    <div class="panel"><h2>Jadwal pekan ini</h2><div class="ttw"><div class="tth" id="tth"></div><div class="tt" id="tt"></div></div></div>
    <div class="panel"><details><summary>Lihat state aplikasi</summary><pre id="dbg"></pre></details></div>
  </aside>
</main>
<div id="toast" role="status"></div>
<div id="modal"></div>
<script>
const C=<?= json_encode($courses, JSON_UNESCAPED_UNICODE) ?>;
const DAYS=["Sen","Sel","Rab","Kam","Jum"],MAX=24,MIN=12;
let S={q:"",day:"all",sel:[],status:"draft",modal:false};
try{const r=JSON.parse(localStorage.getItem("krs")||"null");if(r&&Array.isArray(r.sel)){S.sel=r.sel.filter(i=>C.some(c=>c.id===i));S.status=r.status==="submitted"?"submitted":"draft"}}catch(e){}
const $=id=>document.getElementById(id);
const get=id=>C.find(c=>c.id===id);
const total=()=>S.sel.reduce((a,i)=>a+get(i).sks,0);
const clash=c=>S.sel.map(get).find(o=>o.hari===c.hari&&o.mulai<c.selesai&&c.mulai<o.selesai);
const fmt=h=>{const H=Math.floor(h),m=Math.round((h-H)*60);return String(H).padStart(2,"0")+"."+String(m).padStart(2,"0")};
function st(c){
  if(S.sel.includes(c.id))return{k:"on"};
  if(S.status==="submitted")return{k:"lock",t:"KRS sudah dikirim. Pilih Ubah KRS untuk mengedit."};
  if(c.kuota===0)return{k:"full",t:"Kuota kelas penuh."};
  const x=clash(c);if(x)return{k:"clash",t:"Bentrok dengan "+x.nama+"."};
  if(total()+c.sks>MAX)return{k:"limit",t:"Melebihi batas "+MAX+" SKS."};
  return{k:"ok"};
}
let tt;
function toast(m){const t=$("toast");t.textContent=m;t.classList.add("on");clearTimeout(tt);tt=setTimeout(()=>t.classList.remove("on"),2200)}
function render(){
  try{localStorage.setItem("krs",JSON.stringify({sel:S.sel,status:S.status}))}catch(e){}
  $("chips").innerHTML=["all",0,1,2,3,4].map(d=>`<button class="chip" data-a="day" data-d="${d}" aria-pressed="${S.day===d}">${d==="all"?"Semua hari":DAYS[d]}</button>`).join("");
  const q=S.q.trim().toLowerCase();
  const rows=C.filter(c=>(S.day==="all"||c.hari===S.day)&&(!q||(c.nama+c.kode+c.dosen).toLowerCase().includes(q)));
  $("list").innerHTML=rows.length?rows.map(c=>{
    const s=st(c),on=s.k==="on";
    return `<article class="card k-${s.k}"><div><span class="ck"><b>${c.kode}</b> · ${c.sks} SKS</span><h3>${c.nama}</h3></div>
    <button class="btn ${on?"rm":""}" data-a="t" data-id="${c.id}" ${!on&&s.k!=="ok"?"disabled":""}>${on?"Batalkan":"Ambil"}</button>
    <p class="meta">${DAYS[c.hari]}, ${fmt(c.mulai)}–${fmt(c.selesai)} · ${c.ruang} · ${c.dosen}${c.kuota?" · sisa "+c.kuota+" kursi":""}</p>
    ${s.t?`<p class="why">${s.t}</p>`:""}</article>`}).join(""):
    `<div class="empty">Tidak ada mata kuliah yang cocok. Hapus kata kunci atau pilih Semua hari.</div>`;
  const n=total(),pct=Math.min(100,n/MAX*100),cls=n>=MAX?"max":n>=MIN?"good":"";
  const msg=n<MIN?`Kurang ${MIN-n} SKS dari minimum ${MIN} SKS`:n===MAX?"Batas maksimum tercapai":`Sisa ${MAX-n} SKS`;
  const sub=S.status==="submitted";
  $("meter").innerHTML=`<h2>Beban studi</h2><div class="big">${n}<small> / ${MAX} SKS</small></div>
  <div class="bar ${cls}" role="progressbar" aria-valuenow="${n}" aria-valuemin="0" aria-valuemax="${MAX}"><i style="width:${pct}%"></i></div><p class="hint">${msg}</p>
  ${S.sel.length?`<ul class="mini" style="margin-top:10px">${S.sel.map(get).map(c=>`<li><span>${c.nama}</span><span>${c.sks} SKS</span></li>`).join("")}</ul>`:`<p class="hint" style="margin-top:10px">Belum ada mata kuliah. Pilih Ambil pada daftar di samping.</p>`}
  <div class="act">${sub?`<div class="banner">KRS terkirim. Menunggu persetujuan dosen wali.</div><button class="btn sec" data-a="edit">Ubah KRS</button>`:
  `<button class="btn" data-a="submit" ${n<MIN?"disabled":""}>Kirim KRS</button>${n<MIN?`<p class="hint">Kirim KRS aktif setelah minimal ${MIN} SKS.</p>`:""}`}</div>`;
  $("tth").innerHTML=DAYS.map(d=>`<div>${d}</div>`).join("");
  let h="";for(let i=7;i<=17;i++)h+=`<span class="hr" style="top:${(i-7)*44}px">${fmt(i)}</span>`;
  h+=S.sel.map(get).map(c=>`<div class="blk" style="top:${(c.mulai-7)*44+1}px;height:${(c.selesai-c.mulai)*44-2}px;left:calc(${c.hari*20}% + 2px);background:var(--b${c.id%5})"><b>${c.kode}</b>${c.nama}</div>`).join("");
  $("tt").innerHTML=h;
  $("dbg").textContent=JSON.stringify({kataKunci:S.q,filterHari:S.day==="all"?"semua":DAYS[S.day],dipilih:S.sel.map(i=>get(i).kode),totalSKS:n,status:S.status,dialogTerbuka:S.modal},null,2);
  $("modal").innerHTML=S.modal?`<div class="ov" data-a="close"><div class="dlg" role="dialog" aria-modal="true" aria-labelledby="mt" onclick="event.stopPropagation()"><h2 id="mt">Kirim KRS sekarang?</h2>
  <p class="hint">${S.sel.length} mata kuliah, ${n} SKS. Setelah dikirim, KRS terkunci sampai Anda memilih Ubah KRS.</p>
  <div class="row"><button class="btn sec" data-a="close">Periksa lagi</button><button class="btn" data-a="confirm">Kirim KRS</button></div></div></div>`:"";
}
document.addEventListener("click",e=>{
  const b=e.target.closest("[data-a]");if(!b)return;
  const a=b.dataset.a;
  if(a==="day"){S.day=b.dataset.d==="all"?"all":+b.dataset.d}
  else if(a==="t"){const c=get(+b.dataset.id),s=st(c);
    if(s.k==="on"){S.sel=S.sel.filter(i=>i!==c.id);toast("Dibatalkan: "+c.nama)}
    else if(s.k==="ok"){S.sel=[...S.sel,c.id];toast("Ditambahkan: "+c.nama)}}
  else if(a==="submit"){S.modal=true}
  else if(a==="close"){S.modal=false}
  else if(a==="confirm"){S.modal=false;S.status="submitted";toast("KRS dikirim")}
  else if(a==="edit"){S.status="draft";toast("KRS dibuka untuk diubah")}
  render();
});
$("q").addEventListener("input",e=>{S.q=e.target.value;render()});
document.addEventListener("keydown",e=>{if(e.key==="Escape"&&S.modal){S.modal=false;render()}});
render();
</script>
</body>
</html>
