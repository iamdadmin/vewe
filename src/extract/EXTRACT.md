
# vewe pipeline: extract → JSON → scaffold (with provenance)

## Install extractor deps
```bash
mkdir -p extractor && cd extractor
npm init -y
npm i vue-component-meta@^2 typescript@^5 ts-node@^10 globby@^13 unzipper@^0.10
```

## Run extractor
```bash
node --loader ts-node/esm ./extract.ts   --zip ./reka-ui-2.6.0.zip   --root packages/core/src   --out ./vewe-api.json
```

## Validate JSON
```bash
node -e "const Ajv=require('ajv'); const fs=require('fs'); const ajv=new Ajv({allErrors:true,strict:false}); const s=JSON.parse(fs.readFileSync('/mnt/data/vewe.schema.json','utf8')); const d=JSON.parse(fs.readFileSync('/mnt/data/vewe-api.json','utf8')); const v=ajv.compile(s); if(!v(d)){ console.error(v.errors); process.exit(1);} console.log('Schema OK');"
```

## Generate PHP components
```bash
php /mnt/data/build-all.php --json /mnt/data/vewe-api.json --dest skeleton/Components
```
