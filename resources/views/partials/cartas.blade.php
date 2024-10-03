<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/estilocard.css')}}">

</head>
<body>
    <h4 class="fw-bold text-center">
      <sl-icon name="caret-right-square-fill" aria-hidden="true" library="default" class="pe-3"></sl-icon>Horizontal Accordion
    </h4>
    <div class="hr-line mt-4 mb-4"></div>
    <h4 class="fw-bold text-center mt-5 mb-5">Learn Anything in 3 steps</h4>
    <div class="custom-container d-flex flex-row align-items-stretch">
      <div class="section section-1 grow shadow-dark" id="section-1" role="tabpanel" aria-labelledby="Preview">
        <div class="d-flex flex-row">
          <button onclick="check_section_1()" role="tab" class="button-thin" aria-label="Click to expand Section 1" aria-expanded="true" aria-controls="text-1">
            <sl-icon name="chevron-right" aria-hidden="true" library="default"></sl-icon>
          </button>
        </div>
        <h3>Preview</h3>
        <p id="text-1" class="main-text show">Preview your text and other study materials before class to develop a big picture of what you’ll be covering. Skim through the chapters, noting all headings, subheadings, bold words, graphs, pictures and summaries. Once you’ve developed a big picture, it will be much easier to remember and learn the details. Also, attending a class or a lecture with this basic understanding of the material makes it feel less overwhelming and creates opportunities to formulate any questions during class.</p>
      </div>
      <div class="section section-2 shrink shadow-pink" id="section-2" role="tabpanel" aria-labelledby="Study">
        <div class="d-flex flex-row">
          <button onclick="check_section_2()" role="tab" class="button-thin" aria-label="Click to expand Section 2" aria-expanded="false" aria-controls="text-2">
            <sl-icon name="chevron-right" aria-hidden="true" library="default"></sl-icon>
          </button>
        </div>
        <h3>Study</h3>
        <p id="text-2" class="main-text hide animate">To reinforce the new material you learned during class, and to make sure you thoroughly understand the subject matter being taught. Take about 30-50 minutes to interact with material ‐ organize material, draw concept maps, summarize information, review your notes, read your textbook, work problems, or even form a study group. As you study, ask yourself ‘how’, ‘why’ and ‘what if’ questions. Don’t forget, repetition is the key, set yourself realistic goals and don't forget to take breaks!
        </p>
      </div>
      <div class="section section-3 shrink shadow-blue" id="section-3" role="tabpanel" aria-labelledby="Revise">
        <div class="d-flex flex-row">
          <button onclick="check_section_3()" role="tab" class="button-thin" aria-label="Click to expand Section 3" aria-expanded="false" aria-controls="text-3">
            <sl-icon name="chevron-right" aria-hidden="true" library="default"></sl-icon>
          </button>
        </div>
        <h3>Revise</h3>
        <p id="text-3" class="main-text hide animate">Reflect and evaluate your mastery and understanding of the material you learned and studied. Ask yourself, “Is the information I’m studying making sense?”, “Am I confident with the new material?”, “Do I understand the material well enough that I can teach it to someone else?” Assessing your studying from time to time is an essential aspect of learning and gives you an opportunity to reflect and improve. Finally, always look for opportunities to advance the knowledge you just learned.</p>
      </div>
    </div>
    <div class="hr-line mt-5 mb-4"></div>
    <p class="footer fs-6 fw-bold text-center text-muted">Powered by:</p>
    <p class="text-center">
      <a title="Bootstrap" aria-label="More information about Bootstrap" href="https://getbootstrap.com" target="_blank">
        <img src="https://assets.codepen.io/9400490/Bootstrap.svg" alt="Bootstrap" width="30" height="30">
      </a>
      <a title="Shoelace" aria-label="More information about Shoelace" href="https://shoelace.style/components/icon" target="_blank">
        <img src="https://assets.codepen.io/9400490/Shoelace.svg" alt="Shoelace" width="30" height="30">
      </a>
    </p>
    <script src="{{ asset('js/carts.js') }}"></script>
  </body>
</html>
