import colors from 'tailwindcss/colors'
import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'

export default {
    content: ['./resources/**/*.blade.php', './vendor/filament/**/*.blade.php'],
    theme: {
        container: {
            center: true,
            padding: "16px",
          },
        extend: {
            colors: {
                danger: colors.rose,
                primary: colors.blue,
                success: colors.green,
                // warning: colors.yellow,
                black: "#212b36",
                dark: "#090E34",
                "dark-700": "#090e34b3",
                primary2: "#2AA7FF",
                primaryDarken: "#0079cf",
                secondary: "#13C296",
                "body-color": "#637381",
                warning: "#FBBF24",
                primaryTextColor:"#2196f3",
                primaryTextColorDarken:"#0079cf",
                primaryBg:"#ECFEF5",
                secondaryBg:'#fee5d3',
                body:'#f4f4f4',
                input:'#f3f4fe',
                sectionTitleColor:'#BF8F00',
                textBgColor:'#FFE69A',
                textBgColorDarken:'#e0c77d',
            },
            boxShadow: {
                input: "0px 7px 20px rgba(0, 0, 0, 0.03)",
                pricing: "0px 39px 23px -27px rgba(0, 0, 0, 0.04)",
                "switch-1": "0px 0px 5px rgba(0, 0, 0, 0.15)",
                testimonial: "0px 20px 48px -28px #a3aed8",
            },
            theme: {
                fontSize: {
                    xs: ['0.775rem', '1.25rem'],
                    smd:['1rem']
                },
            },
        },
        fontFamily: {
            'Noto': ['Noto Kufi Arabic', 'sans-serif'],
            'Noto-Naskh': ['Noto Naskh Arabic', 'sans-serif'],
        },
    },
    plugins: [
        forms,
        typography,
    ],
}
