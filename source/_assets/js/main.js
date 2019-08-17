import 'promise-polyfill/src/polyfill'
import 'focus-visible'
import conditioner, {
    connection,
    idle,
    saveData,
    screen,
    visible
} from '@parallaxagency/conditioner'
import screens from './tailwind.screens'

conditioner.addPlugin({
    moduleSetName: name => `./components/${name}.js`,
    moduleGetConstructor: module => module.default,
    moduleImport: name =>
        import( /* webpackChunkName: "conditionerPlugin" */ `${name}`)
})

conditioner.addPlugin(connection)
conditioner.addPlugin(idle)
conditioner.addPlugin(saveData)
conditioner.addPlugin(screen(screens))
conditioner.addPlugin(visible)

conditioner.hydrate(document.documentElement)