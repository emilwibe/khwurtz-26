{
  const d_hatting_time = document.querySelector(".hatting-time");

  const hattingTime = () => {
    const now = new Date();

    const formatter = new Intl.DateTimeFormat("en-GB", {
      timeZone: "Europe/Copenhagen",
      hour: "2-digit",
      minute: "2-digit",
      second: "2-digit",
      hour12: false,
    });

    const parts = formatter.formatToParts(now);

    const h = parts.find((p) => p.type === "hour").value;
    const m = parts.find((p) => p.type === "minute").value;
    const s = parts.find((p) => p.type === "second").value;

    return `${h}:${m}:${s}`;
  };

  setInterval(() => {
    d_hatting_time.innerHTML = "Hatting / DK " + hattingTime();
    d_hatting_time.setAttribute("datetime", hattingTime());
  }, 200);
}