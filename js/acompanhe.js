// Arquivo JS da página Acompanhe

new Twitch.Embed("twitch-embed", {
  height: "100%",
  width: "100%",
  channel: "ligauniversitariaesports",
  layout:"video"
});

function reloadLOL() {

  document.getElementById('destaques-lol').style.display='block';

  document.getElementById('destaques-csgo').style.display='none';
  document.getElementById('destaques-fifa').style.display='none';
  document.getElementById('destaques-hs').style.display='none';
  document.getElementById('destaques-clash').style.display='none';

  document.getElementById('tabelaLOL').style.display='block';

  document.getElementById('tabelaCS').style.display='none';
  document.getElementById('tabelaFIFA').style.display='none';
  document.getElementById('tabelaCLASH').style.display='none';
  document.getElementById('tabelaHS').style.display='none';


}

function reloadCS() {
  document.getElementById('destaques-csgo').style.display='block';
  document.getElementById('tabelaCS').style.display='block';

  document.getElementById('destaques-lol').style.display='none';
  document.getElementById('destaques-fifa').style.display='none';
  document.getElementById('destaques-hs').style.display='none';
  document.getElementById('destaques-clash').style.display='none';

  document.getElementById('tabelaCS').style.display='block';

  document.getElementById('tabelaLOL').style.display='none';
  document.getElementById('tabelaFIFA').style.display='none';
  document.getElementById('tabelaCLASH').style.display='none';
  document.getElementById('tabelaHS').style.display='none';
}


function reloadFIFA() {
  document.getElementById('destaques-fifa').style.display='block';
  document.getElementById('tabelaFIFA').style.display='block';

  document.getElementById('destaques-lol').style.display='none';
  document.getElementById('destaques-csgo').style.display='none';
  document.getElementById('destaques-hs').style.display='none';
  document.getElementById('destaques-clash').style.display='none';

  document.getElementById('tabelaFIFA').style.display='block';

  document.getElementById('tabelaLOL').style.display='none';
  document.getElementById('tabelaCS').style.display='none';
  document.getElementById('tabelaCLASH').style.display='none';
  document.getElementById('tabelaHS').style.display='none';
}

function reloadHS() {
  document.getElementById('destaques-hs').style.display='block';

  document.getElementById('destaques-lol').style.display='none';
  document.getElementById('destaques-csgo').style.display='none';
  document.getElementById('destaques-fifa').style.display='none';
  document.getElementById('destaques-clash').style.display='none';

  document.getElementById('tabelaHS').style.display='block';

  document.getElementById('tabelaLOL').style.display='none';
  document.getElementById('tabelaCS').style.display='none';
  document.getElementById('tabelaFIFA').style.display='none';
  document.getElementById('tabelaCLASH').style.display='none';
}



function reloadCLASH() {
  document.getElementById('destaques-clash').style.display='block';

  document.getElementById('destaques-lol').style.display='none';
  document.getElementById('destaques-csgo').style.display='none';
  document.getElementById('destaques-hs').style.display='none';
  document.getElementById('destaques-fifa').style.display='none';

  document.getElementById('tabelaCLASH').style.display='block';

  document.getElementById('tabelaLOL').style.display='none';
  document.getElementById('tabelaCS').style.display='none';
  document.getElementById('tabelaFIFA').style.display='none';
  document.getElementById('tabelaHS').style.display='none';
}
