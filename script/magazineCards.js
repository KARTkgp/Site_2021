const PITSTOP_DETAILS = [
  {
    id: 1,
    identifier: "pitstop-01",
    title: "Pitstop 01",
    img: "../images/pitstop/pitstop-01.jpg",
    body: "Teamkart is back in the bay, Alumni meet 2022,Bay visit by Manab racing and a pleasant welcome to our new sponsor",
  },
  {
    id: 2,
    identifier: "pitstop-02",
    title: "Pitstop 02",
    img: "../images/pitstop/pitstop-02.jpg",
    body: "Unraveling the resemblance of Formula 1 to Formula SAE,THE LEGACY LEFT BEHIND : KTM Duke 390 and TeamKART ",
  },
  {
    id: 3,
    identifier: "pitstop-03",
    title: "Pitstop 03",
    img: "../images/pitstop/pitstop-03.jpg",
    body: "F1 Invention that come into commercial cars.How does a Formula Student Team work? , Subsystem updates",
  },
  {
    id: 4,
    identifier: "pitstop-04",
    title: "Pitstop 04",
    img: "../images/pitstop/pitstop-04.jpg",
    body: "That Mclaren a Rocketship go, Max Verstappen is off the line but it's a good start for Lando Norris and Lando Norris leads the British Grand Prix.",
  },
  {
    id: 5,
    identifier: "pitstop-05",
    title: "Pitstop 05",
    img: "../images/pitstop/pitstop-05.jpg",
    body: "Timeless colours of F1,History of Liveries and the first sponsorship colours,Our top 10 picks for most iconic liveries in F1 history and our teams subsystem updates.",
  },
  {
    id: 6,
    identifier: "pitstop-06",
    title: "Pitstop 06",
    img: "../images/pitstop/pitstop-06.jpg",
    body: "The unforgettable thrill of F1, Three too many (an article on chassis), latest updates in the world of motorsports and CDC internships of Heads.",
  },{
    id: 7,
    identifier: "pitstop-07",
    title: "Pitstop 07",
    img: "../images/pitstop/pitstop-07.jpg",
    body: "The fear and speed of the Imola Circuit, Senna and his exceptional career, Updates from the motorsports world, the new film F1 starring Brad Pitt, F1 2026 Regulations, TeamKART’s subsystem updates and much more.",
  },
];

const magazineCard = document.querySelector("#magazine-cards");

PITSTOP_DETAILS.map((item) => {
  magazineCard.innerHTML += `
  <a class="card text-decoration-none text-dark" style="width: 18rem;" href="../pitstop/${item.identifier}.html">
  <img class="card-img-top" src="${item.img}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">${item.title}</p>
    <div>${item.body}</div>
  </div>
</a>`;
});
