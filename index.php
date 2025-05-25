<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portofolio</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      scroll-behavior: smooth;
    }

    body {
      background-color: #B3E5FC;
    }

    header {
      background-color: transparent;
      backdrop-filter: blur(8px);
      position: sticky;
      top: 0;
      border-bottom-right-radius: 15px;
      border-bottom-left-radius: 15px;
      border-bottom: solid 1.3px white;
    }

    .ya {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 17px 20px;
    }

    .nama {
      font-size: x-large;
      color: white;
    }

    .link-nav {
      display: flex;
    }

    .link-nav li {
      list-style: none;
    }

    .link-nav a {
      text-align: center;
      justify-content: center;
      justify-items: center;
      align-items: center;
      text-decoration: none;
      color: black;
      margin-right: 25px;
      border: solid 1.7px purple;
      border-radius: 6px;
      padding: 3px 8px;
      font-weight: normal;
      transition-duration: 0.3s;
    }

    nav.laut-nav a {
      color: white;
    }

    .link-nav a.active {
      background-color: purple;
      color: whitesmoke;
      font-size: 1.25rem;
    }

    .link-nav a:hover {
      background-color: purple;
      color: whitesmoke;
    }

    section {
      min-height: 100vh;
    }

    #home {
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      background: linear-gradient(to bottom, #B3E5FC, #81D4FA);
    }

    .profil img {
      border: solid 2px blue;
      border-radius: 50%;
      width: 18rem;
    }

    .profil-nama {
      color: black;
    }

    #about {
      display: flex;
      justify-items: center;
      align-items: center;
      padding: 0 30px;
      background: linear-gradient(to bottom, #2E86C1, #1A5276);
    }

    .about {
      display: flex;
      justify-items: center;
    }

    .about-img img {
      width: 15vh;
      height: 65vh;
      border-radius: 10px;
      border: solid 1px white;
    }

    .about .info {
      margin: 8px 35px;
      width: 900px;
      word-wrap: break-word;
      overflow-wrap: break-word;
      font-size: 1.03rem;
    }

    .info span,
    p {
      display: block;
      font-size: larger;
      color: white;
      text-align: justify;
    }

    .info span a {
      text-decoration: none;
      color: rgb(150, 225, 255);
    }

    .skill {
      display: flex;
    }

    .logo {
      display: flex;
    }

    .logo img {
      width: 100px;
      border: solid 1px transparent;
      border-radius: 10px;
      margin: 0 10px;
      transition: all 0.4s ease-in-out;
      cursor: pointer;
      gap: 10px;
    }
    .logo img.gede{
      width: 120px;
    }
    .logo img.kecil{
      width: 70px;
    }
    #projects {
      background: linear-gradient(to bottom, #1A5276, #154360);
    }

    #achievement {
      background: linear-gradient(to bottom, #154360, #0B2B40);
    }

    #projects,
    #achievement {
      display: flex;
      justify-content: center;
      justify-items: center;
    }

    .tabel {
      margin: 90px 0;
    }

    .tabel table {
      width: 1500px;
      height: fit-content;
    }

    tr {
      border-collapse: collapse;
      justify-content: space-around;
      display: flex;
    }

    td {
      display: flex;
    }

    .container {
      border: solid 1px white;
      border-radius: 10px;
      padding: 20px;
      margin: 50px 0;
      display: flex;
      justify-content: center;
      align-items: center;
      background: rgba(0, 0, 0, 0.2);
      width: 345px;
      word-wrap: break-word;
      overflow-wrap: break-word;
      transition: all 0.3s ease-in-out;
    }

    .container:hover {
      transform: translateY(-10px);
      background-color: #2E86C1;
    }

    .frame {
      width: 300px;
      height: 220px;
      overflow: hidden;
    }

    .frame img {
      border-radius: 10px;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .deskripsi {
      color: white;
    }

    .deskripsi p {
      color: white;
    }

    #contacts {
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(to bottom, #0B2B40, #010A12);
    }

    .form {
      width: 450px;
      height: 500px;
      color: black;
      border: solid 1px whitesmoke;
      border-radius: 10px;
      padding: 30px 20px;
      background-color: rgba(255, 255, 255, 0.08);
      justify-content: center;
      display: flex;
      color: white;
      backdrop-filter: blur(8px);
    }

    .form-container {
      margin-bottom: 20px;
    }

    .form-container label {
      font-size: 20px;
    }

    .form-input input,
    textarea {
      font-size: 1.2rem;
      font-weight: bolder;
      width: 25rem;
      border-radius: 10px;
      background-color: aqua;
      padding: 5px;
      outline: 1px solid transparent;
      outline-offset: 2px;
      transition: all 0.3s ease;
      font-family: "Times New Roman", Times, serif;
    }

    .form-input input {
      height: 3.8rem;
      padding: 1rem;
    }

    .form-input textarea {
      height: 7.7rem;
      padding: 16px;
    }

    form button {
      margin-top: 6px;
      border-radius: 9px;
      width: 90px;
      height: 2rem;
      transition: 0.4s ease;
    }

    form button:hover {
      transform: translateY(-3px);
    }

    .form-input input:focus,
    textarea:focus {
      border: 1px solid white;
      box-shadow: 0 0 0 2px rgba(76, 85, 51, 0.8);
    }

    .another-contacts {
      display: flex;
      justify-content: center;
      justify-items: center;
      align-items: center;
      padding-top: 50px;
      text-align: center;
    }

    .judulkontak {
      padding-bottom: 30px;
    }

    .contact-link ul {
      display: flex;
      list-style: none;
      align-items: center;
    }

    .contact-link a {
      padding: 0 25px;
      align-items: center;
    }

    .contact-link li {
      transition: all 0.4s ease;
    }

    .contact-link li:hover {
      transform: translateY(-10px);
    }
  </style>
</head>

<body>
  <header>
    <div class="ya">
      <div class="nama">
        <h2 class="nama">Dava Galang Samudra</h2>
      </div>

      <nav id="nanav">
        <ul class="link-nav">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About Me</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#achievement">Achievements</a></li>
          <li><a href="#contacts">Contacts</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="home">
    <div>
      <div class="profil">
        <img src="asset/profil2.png" alt="" />
      </div>
      <div class="profil-nama">
        <h2>Dava Galang Samudra</h2>
        <span>Programmer | Backend | Smeas </span>
      </div>
    </div>
  </section>

  <section id="about">
    <div class="about">
      <div class="about-img">
        <img src="asset/sigma_maleV2.jpg" alt="" />
      </div>
      <div class="info">
        <span>Nama: Dava Galang Samudra</span><br />
        <span>Umur: 16 Tahun</span><br />
        <span>Status: Pelajar</span><br />
        <span>
          Pendidikan:
          <a
            href="https://dapo.dikdasmen.go.id/sekolah/BC4BAC0EEC433676E6C2"
            target="_blank">&#8981; SDN Lidah Wetan 2/462,</a>
          <a href="https://smpn16sby.sch.id/" target="_blank">&#8981; SMPN 16 Surabaya,</a>
          <a href="https://www.smkn1-sby.sch.id/" target="_blank">&#8981; SMKN 1 Surabaya</a> </span><br />
        <p>
          Deskripsi: Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur.
        </p><br>

        <div class="skill">
          <span>Skills: </span>
          <div class="logo">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML" title="HTML" />
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS" title="CSS" />
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" title="PHP" />
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" title="MySQL" />
          </div>
        </div>

      </div>
    </div>
  </section>
  <section id="projects">
    <div class="tabel">
      <table>
        <tbody>
          <tr>
            <td>
              <div class="container">
                <div class="co-container">
                  <div class="frame">
                    <img
                      src="asset/scratchlogo.png"
                      alt="" />
                  </div>
                  <div class="deskripsi">
                    <span>Scrath | </span><i>complete&#10004;</i>
                    <p>Pembuatan game sederhana</p>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <div class="container">
                <div class="co-container">
                  <div class="frame">
                    <img
                      src="asset/itcProject.jpg"
                      alt="" />
                  </div>
                  <div class="deskripsi">
                    <span>ITC Web | </span><i>complete&#10004;</i>
                    <p>Pembuatan Web dengan tema CyberSec</p>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <div class="container">
                <div class="co-container">
                  <div class="frame">
                    <img
                      src="asset/maintenance.png"
                      alt="" />
                  </div>
                  <div class="deskripsi">
                    <span>Bom Game | </span><i>&#128683;incomplete</i>
                    <p>Web Game sederhana menghindari bom</p>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="container">
                <div class="co-container">
                  <div class="frame">
                    <img
                      src="asset/Screenshot (118).png"
                      alt="" />
                  </div>
                  <div class="deskripsi">
                    <span> SoapGame | </span><i>complete&#10004;</i>
                    <p>Global Game Jam Project, game sederhana tema bubble</p>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <div class="container">
                <div class="co-container">
                  <div class="frame">
                    <img
                      src="asset/sigma_male.jpg"
                      alt="" />
                  </div>
                  <div class="deskripsi">
                    <span>Nama Project | </span><i>&#128683;in/complete&#10004;</i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <div class="container">
                <div class="co-container">
                  <div class="frame">
                    <img
                      src="asset/Screenshot (117).png"
                      alt="" />
                  </div>
                  <div class="deskripsi">
                    <span>Nama Project | </span><i>&#128683;in/complete&#10004;</i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <section id="achievement">
    <div class="tabel">
      <table>
        <tbody>
          <tr>
            <td>
              <div class="container">
                <div class="co-container">
                  <div class="frame">
                    <img
                      src="asset/Screenshot (117).png"
                      alt="" />
                  </div>
                  <div class="deskripsi">
                    <span>Sertifikat Kursus Level 1</span>
                    <p>Bahasa Pemrograman C++</p>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <div class="container">
                <div class="co-container">
                  <div class="frame">
                    <img
                      src="asset/Screenshot (118).png"
                      alt="" />
                  </div>
                  <div class="deskripsi">
                    <span>Sertifikat Kursus Level 2</span>
                    <p>Pengembangan Web Dinamis</p>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <div class="container">
                <div class="co-container">
                  <div class="frame">
                    <img
                      src="asset/GGJ.jpeg"
                      alt="" />
                  </div>
                  <div class="deskripsi">
                    <span>Sertifikat GGJ</span>
                    <p>Global Game jam 2024</p>
                  </div>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="container">
                <div class="co-container">
                  <div class="frame">
                    <img
                      src="asset/TOEIC.jpeg"
                      alt="" />
                  </div>
                  <div class="deskripsi">
                    <span>Sertifikat TOEIC</span>
                    <p>Tes bahasa inggris TOEIC</p>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <section id="contacts">
    <div class="form">
      <?php
      include 'kontak.php';
      if ($hasil == true) {
        echo'<p>Sukses</p>';
       } ?>
      <form action="kontak.php" method="post">
        <div class="form-container">
          <label for="">Email:</label>
          <div class="form-input">
            <input type="email" name="email" placeholder="Masukkan Email" required />
          </div>
        </div>
        <div class="form-container">
          <label for="">Pesan:</label>
          <div class="form-input">
            <textarea
              type="text"
              name="pesan"
              placeholder="Tulis pesan" required></textarea>
          </div>
        </div>
        <button type="submit">Kirim</button>
        <div class="another-contacts">
          <div>
            <div class="judulkontak">
              <h1>Another Contacts</h1>
            </div>
            <div class="contact-link">
              <ul>
                <li><a href="https://wa.me/6281334525528" target="_blank"><img width="35px" style="border-radius: 50%;" src="data:image/png;base64,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" alt=""></a></li>
                <hr>
                <li><a href="https://www.instagram.com/mas_dupan?igsh=MTBkcjhhZHlxcmZscA==" target="_blank"><img width="35px" style="border-radius: 50%;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKoAAACUCAMAAAA02EJtAAAAZlBMVEX///8AAADe3t64uLg4ODj6+vowMDCFhYWRkZHh4eH39/fq6url5eU8PDzMzMzW1tZubm5OTk6/v798fHwfHx+wsLDGxsYICAgUFBQqKipTU1Oenp5dXV0aGhp2dnZISEhlZWWmpqboWiftAAAEX0lEQVR4nO1baduyKhAucyk0c8tKrfT//8k3k0Fc62Kxx3Pm/pYJ3MIwG8Nmg0AgEAgEAoFAIBAIBAKBQCB+A8uyiOsZpzSNomg3gtfjND0Znkter/6KJTH8PA6v269xDePcN8jiRL08ML9n2eIY5IdFiZ6KRIRng6Q4LUc0EOfZIFiI7P4my3S7ve0XIOqW8kRrlK5upkaohul2Gxp6mbrPwZD3Y1iUj0fsvLHn0DyJH4+yCI/DffjUOq9uxo+VZLnvElIr9zn1/v779Zrr51mHcKaRq/XgBgoqgZHcitceD332q+JWLxI0OyTiZKhSy48bpR3DkbCPxGn70WVm2+XP5TrKWxFQw6yPkw0DSOvvPfRk6zFbrP9YsIOXEoAFjxWtzzjcI8yEmI4hu5f1CKuGrAsrdNShsHy5iSB0IrPmJxNXXyFFAFszMWXIxKd8/7RkpWkO4O87Qq0Zte29mUfQWFeVHHtjpULNmfiAAKX6VCuMdfwYb9T2nvSlZNdSbVTdAXapemGtaM/B7Cy4/i6Pg6II4nzn85vbYEwv5/cDAs6AeuMKsjUnqr7Du05J5nAzxkLbxP2+QzGA8z9pqUg0EsLazKthwnqmD0AllMqpFh/WKy2GRGsUsA0bj8pm7UGiMuVUs46k9WHlk7mLa063mHd24nO7Kc8XTVQtGlNdd2P/ehNTSifWG2uzox8XqvavCaV6j8aYfki0mGMKLrpTqqoVK6G+ezJiAQ4fo9hwhGtKlcVTNVXwq25DB9Plmd6fj7NvGP758bzzXIcO1IlmPpT7VjNUucDuEqdM8qw0vrT/BNNURyVZAt4kVc5kPv3OFrF8LuIbbEdGVXVmEEy23c+JMFs+anfaiG/ACOIf5bM6SZX5oddRl7vVt30zZ9gT3yALwxyn6iVTVCjYpyS92QOqpurc1RTVnnM/gnLiWxanCut7mVQ5LuiBnr+/NNUDTNlMbMgivq5Q6qfaHQ/Wf248aNqTAO1Uze7mAEGM55KWEOuWncfgOCxEFZyY+aijoi91HZOFqYK2TWZjOZ8qtK4GXZgqWBx7Vo0f4K2OUV6Yqk/tuDnrHbm07a0z90j1owDMDvcnBGBF22pFyupPmwB1hvWA7sp/wAlck2v9BwOWFYWBjGo/DyAfXKumKpay4FJE0ykL1XkAjYmgBXNWnfRa8vv02oqSltZ6UsErSrArOLboQduxhfxhUB8VvKCc6hdHbPaQqDldOKTviE324FKoQzHAegkeBw+g8ThY8pB9AI2H7KweTKx0YQBWuqCh2A60kaIiWY0FIbJlNj1oLbORLF7qQWvxkmxJWLczrSVh8oV2HJg06SkPX1H54oqKQtdUarup2jH+eAHzxuJruhWUhQcarzWtp9j+iysMztQVhvugod4rDGu6GLKm6zabFV1i2qzpalhNtlzJhbsaotcYzaWvMdYQuRxa/eJyKEWt27+8ckt+d+UWgUAgEAgEAoFAIBAIBAKB+N/jH9qvSCP4iDc4AAAAAElFTkSuQmCC" alt=""></a></li>
                <hr>
                <li><a href="mailto:davagalangsamudra06@gmail.com" target="_blank"><img width="35px" style="border-radius: 50%;" src="data:image/png;base64,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" alt=""></a></li>
              </ul>

            </div>
          </div>

        </div>
      </form>
    </div>
  </section>
</body>
<script>
  window.addEventListener("scroll", () => {
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll("li a");
    const navbar = document.getElementById("nanav");
    sections.forEach((section) => {
      const top = section.offsetTop - 200;
      const bottom = top + section.offsetHeight;
      const scroll = window.scrollY;
      console.log(scroll);
      if (scroll >= top && scroll < bottom) {
        const id = section.getAttribute("id");
        navLinks.forEach((link) => {
          link.classList.remove("active");
          link.classList.remove("laut");
          if (link.getAttribute("href") === `#${id}`) {
            link.classList.add("active");
          }

        });
      }
      const section2 = document.getElementById("about").offsetTop - 200;
      if (window.scrollY >= section2) {
        navbar.classList.add("laut-nav");
      } else {
        navbar.classList.remove("laut-nav");
      }

    });
  });
  const logo = document.querySelector(".logo");
  const gambar = logo.querySelectorAll("img");

  gambar.forEach((img) => {
    img.addEventListener("mouseenter", () => {
      gambar.forEach((other) => {
        if (other !== img) {
          other.classList.add("kecil");
        } else {
          img.classList.add("gede");
        }
      });
    });

    img.addEventListener("mouseleave", () => {
      gambar.forEach((other) => {
        other.classList.remove("kecil");
        other.classList.remove("gede");
      });
    });
  });
</script>

</html>