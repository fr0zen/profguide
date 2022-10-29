import start from './components/start.vue';
import welcome from './components/welcome.vue';
import stepA from './components/stepA.vue';
import stepB from './components/stepB.vue';
import stepCompany from './components/stepCompany.vue';
import stepRemote from './components/stepRemote.vue';
import stepDepartments from './components/stepDepartments.vue';
import stepCat from './components/stepCat.vue';
import stepWildCat from './components/stepWildCat.vue';
import stepHomeCat from './components/stepHomeCat.vue';
import stepTalents from './components/stepTalents.vue';
import stepSummary from './components/stepSummary.vue';
import stepBonus from './components/stepBonus.vue';
import finish from './components/finish.vue';
import demo from './components/demo.vue';
import rudemo from './components/rudemo.vue';
import endemo from './components/endemo.vue';
import demo2 from './components/demo2.vue';
import rudemo2 from './components/rudemo2.vue';
import endemo2 from './components/endemo2.vue';
export const routes = [
    {
        name: 'demo',
        path: '/course/demo',
        component: demo
    },
    {
        name: 'rudemo',
        path: 'ru/course/demo',
        component: rudemo
    },
    {
        name: 'endemo',
        path: 'en/course/demo',
        component: endemo
    },
    {
        name: 'demo2',
        path: '/course/demo2',
        component: demo2
    },
    {
        name: 'rudemo2',
        path: 'ru/course/demo2',
        component: rudemo2
    },
    {
        name: 'endemo2',
        path: 'en/course/demo2',
        component: endemo2
    },
    {
        name: 'start',
        path: '/course/start',
        component: start
    },
    {
        name: 'welcome',
        path: '/course/welcome',
        component: welcome,
    },
    {
        name: 'stepA',
        path: '/course/step-A',
        component: stepA,
    },
    {
        name: 'stepB',
        path: '/course/step-B',
        component: stepB
    },
    {
        name: 'stepCompany',
        path: '/course/step-company',
        component: stepCompany
    },
    {
        name: 'stepRemote',
        path: '/course/step-remote',
        component: stepRemote
    },
    {
        name: 'stepDepartments',
        path: '/course/step-departments',
        component: stepDepartments
    },
    {
        name: 'stepCat',
        path: '/course/step-cat',
        component: stepCat
    },
    {
        name: 'stepWildCat',
        path: '/course/step-wild-cat',
        component: stepWildCat
    },
    {
        name: 'stepHomeCat',
        path: '/course/step-home-cat',
        component: stepHomeCat
    },
    {
        name: 'stepTalents',
        path: '/course/step-talents',
        component: stepTalents
    },
    {
        name: 'stepSummary',
        path: '/course/step-summary',
        component: stepSummary
    },

    {
        name: 'stepBonus',
        path: '/course/step-bonus',
        component: stepBonus
    },


    {
        name: 'stepFinish',
        path: '/course/step-finish',
        component: finish
    },
];
