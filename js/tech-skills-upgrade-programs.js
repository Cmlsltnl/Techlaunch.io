const $ = require('jquery')

function _switchPrograms(active) {
    $(`.switchable:not(.${active}-content)`).hide()
    $(`.${active}-content`).show()
    $('.programs-bar button').removeClass('active')
    $(`.programs-bar button[data-program="${active}"]`).addClass('active')
}

function initProgramSwitcher() {
    if($('#tech-skills-upgrade-programs').length === 0) return false

    let active = $('.programs-bar button.active').data('program')
    _switchPrograms(active)

    $('.programs-bar button').click(e => {
        active = $(e.currentTarget).data('program')
        _switchPrograms(active)
    })

    $('.program-card').click(e => {
        active = $(e.currentTarget).data('program')
        _switchPrograms(active)
        $(window).scrollTop($('section.summary').offset().top)
    })
}

initProgramSwitcher()