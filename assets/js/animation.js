

document.addEventListener('DOMContentLoaded', () => {
    anime.timeline({
        easing: 'easeOutExpo',
        duration: 1000
    })
    .add({
        targets: '.bamboo-section',
        opacity: [0,1],

        width: ['0', '50%']
    })
    .add({
        targets: '.rattan-section',
        opacity: [0,1],
        width: ['0', '50%'],
        // offset: '-=2000',
    })
    .add({
        targets: '.bahcane-logo',
        opacity: [0, 1]
    })
    .add({
        targets: '.side-border-left',
        opacity: [0, 1],
        // height: ['0', '100%']
    })
    .add({
        targets: '.side-border-right',
        opacity: [0, 1],
        offset: '-=1000',
        // height: ['0', '100%']

    })
});

document.querySelectorAll('.btn-explore').forEach(link => link.addEventListener('click', (e) => {
        e.preventDefault();
        console.log('clicked.');
        anime.timeline({
            easing: 'easeOutExpo',
            duration: 700
        })
        .add({
            targets: '.side-border-left',
            opacity: [1, 0],
            // height: ['0', '100%']
        })
        .add({
            targets: '.side-border-right',
            opacity: [1, 0],
            offset: '-=1000',
            // height: ['0', '100%']
        })
        .add({
            targets: '.bamboo-section',
            opacity: [1,0],

            width: ['50%', '0']
        })
        .add({
            targets: '.rattan-section',
            opacity: [1,0],
            width: ['50%', '0'],
            offset: '-=700',
            complete() {
                console.log('Animatiuon complete...');
                window.location = "/cool";
            }
        });        
    })
);

// document.querySelector('.bamboo-section').addEventListener('mouseover', () => {
//     console.log('Bamboo mouse over..');
//     anime.timeline({
//         easing: 'easeOutExpo',
//         duration: 1000
//     })
//     .add({
//         targets: '.bamboo-section',
//         scale: 1.02,
//         zIndex: -1
//     })
// });

// document.querySelector('.bamboo-section').addEventListener('mouseleave', () => {
//     console.log('Bamboo mouse leave..');
//     anime.timeline({
//         easing: 'easeOutExpo',
//         duration: 1000
//     })
//     .add({
//         targets: '.bamboo-section',
//         scale: 1
//     })
// });

// window.fitText(document.querySelectorAll('.main-text'), 1.4);

// window.fitText(document.querySelectorAll('.section-info'), 1.9);

