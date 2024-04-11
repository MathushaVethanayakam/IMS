<style>
@import url('https://fonts.googleapis.com/css2?family=Mulish:wght@300;400&family=Poppins:wght@300;500&display=swap');
*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
nav > ul,
nav > ul > li {
  outline: 0;
}
nav > ul > li > a {
 text-decoration: none;
}
body {
  min-height: 100vh;
  background: linear-gradient(90deg, #4b6cb7 , #182848 );
}
.main-menu {
  position:fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 60px;
  overflow:hidden;
  background: rgba(0, 0, 0, 0.63);
  transition: all .2s linear;
  z-index: 10;
  padding-top: 10px;
}
.main-menu:hover {
  width: 180px;
  overflow:visible;
}
.main-menu > ul > li {
  position: relative;
  display: block;
  width: 180px;
}
.main-menu > ul > li > a {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  color:#eee;
  font-size: 1rem;
  transition:all .2s ease-in;
  padding: 10px 0;

}
.nav-icon {
  width: 60px;
  height: 20px;
  font-size: 20px;
  text-align: center;
}
.nav-text {
  width: 120px;
  height: 20px;
  font-family: "mulish" , sans-serif;
}
.logout {
  position: absolute;
  left: 0;
  bottom: 0;
}
.main-menu li:hover > a, .main-menu li.active > a, .main-menu li > a:focus {
  text-decoration: none;
  color: #000;
  background-color: rgba(255, 255, 255, 0.9);
}
section {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
  padding: 80px 40px 40px 80px;
}
.card {
  width: min(100%, 500px);
  background: rgba(255, 255, 255);
  border-radius: 16px;
  font-family: "Poppins", sans-serif;
  z-index: 5;
}
.card > img {
  display: block;
  width: 100%;
  max-width: 500px;
  object-fit: cover;
  object-position: 50% 50%;
  border-radius: 16px 16px 0 0;
  filter: contrast(40%);
  transition: all 0.6s cubic-bezier(0.43, 0.41, 0.22, 0.91);
}
.card > img:hover {
  filter: contrast(100%);
}
.card-content {
  display: flex;
  flex-direction: column;
  padding: 20px 15px 20px;
}
.card-content > p {
  margin-bottom: 10px;
}
.card-content > p:nth-child(1) {
  font-size: 1rem;
  font-weight: 600;
  margin-bottom: 10px;
  color: #1e40af;
}
.card-content > p:nth-child(2) {
  font-size: 0.8rem;
  font-weight: 400;
  color: #6b7280;
}
@media (max-width: 960px) {
  section {
     grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 600px) {
  section {
     grid-template-columns: repeat(1, 1fr);
  }
}
</style>